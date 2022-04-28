$.fn.besTable = function(opts){
    var $this = this,
        defaults = {
            perPage: 8,
            showPrevNext: false,
            hidePageNumbers: false,
            ignoreHead: null
        }, 
        settings = $.extend(defaults, opts);
        var headKeys = [];
        var classToDefined = [];
        var arrIgnored = [];
        var perPageSelect = [8, 16, 32, 64, 128];
        var listElement = $this;
        var parentTable = $(listElement).closest('table');
        var searchBox = '';
        var listElementHead = $this.prev().children().find('th');
        var perPage = settings.perPage; 
        var children = listElement.children();
        var pager = $('.pager-' + settings.pagerSelector.replace('#','')); 
        var showRecord = '';
        var currentTbody = $this.attr('id');
        if(settings.ignoreHead.length > 0){
            for(i = 0; i < settings.ignoreHead.length; i++){
                arrIgnored[settings.ignoreHead[i]] = settings.ignoreHead[i];
            }
        }
        listElementHead.each(function(e, v){
            var headValue = $(v).html();
            if(Object.keys(arrIgnored).find(headValue => arrIgnored[$(v).html()] != $(v).html())) {
                var strKey = $(v).html().replace(/ /g, '');
                    strKey = strKey.replace('.', '');
                    strKey = strKey.toLowerCase();
                headKeys[strKey] = $(v).html();
                classToDefined.push(strKey);
            }
        });
        searchBox =  '<div class="row" style="margin: 0px !important;"> \
                        <div class="col-sm-4 col-md-4 col-lg-4"></div> \
                        <div class="col-sm-8 col-md-8 col-lg-8"> \
                            <div class="v4-search-wrapper">';
                        searchBox += '<select class="v4-select-search-control field-' + currentTbody +'">';
                        for (var keyHead in headKeys) {
                            searchBox += '<option value="' + keyHead +'">' + headKeys[keyHead] + '</option>';
                        }
        searchBox += '               </select><input type="text" class="v4-search-control bes-search-' + currentTbody + '" placeholder="Select"> \
                            </div> \
                        </div> \
                    </div>';
        $(searchBox).insertBefore(parentTable);

        if (typeof settings.childSelector!="undefined") {
            children = listElement.find(settings.childSelector);
        }
        
        if (typeof settings.pagerSelector!="undefined") {
            pager = $(settings.pagerSelector);
        }

        if(classToDefined.length > 0 || typeof classToDefined !== "undefined") {
            for(var r = 0; r < children.length; r++) {
                var childTd = $(children[r]).children();
                for(var t = 0; t < childTd.length; t++) {
                    $(childTd[t]).addClass(classToDefined[t]);
                }
            }
        }
        
        var numItems = children.length;
        var numPages = Math.ceil(numItems/perPage);

        pager.data("curr",0);
        
        if (settings.showPrevNext){
            $('<li><a href="#" class="first_link">«</a></li>').appendTo(pager);
            $('<li><a href="#" class="prev_link">‹</a></a></li>').appendTo(pager);
        }
        
        var curr = 0;
        while(numPages > curr && (settings.hidePageNumbers==false)){
            $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
            curr++;
        }
        
        if (settings.showPrevNext){
            $('<li><a href="#" class="next_link">›</a></li>').appendTo(pager);
            $('<li><a href="#" class="last_link">»</a></li>').appendTo(pager);
        }
        
        pager.find('.page_link:first').addClass('active');
        // pager.find('.prev_link').hide();
        if (numPages<=1) {
            // pager.find('.next_link').hide();
        }
        pager.children().eq(2).addClass("active");
        
        children.hide();
        children.slice(0, perPage).show();
        
        pager.find('li .page_link').click(function(){
            var clickedPage = $(this).html().valueOf()-1;
            goTo(clickedPage,perPage);
            return false;
        });
        pager.find('li .prev_link').click(function(){
            previous();
            return false;
        });
        pager.find('li .next_link').click(function(){
            next();
            return false;
        });

        if(settings.perPage > 0) {
            showRecord += ' <div class="v4-wrapper-show-record"> \
                                <select class="v4-select-show-record">';
                                for (var s = 0; s < perPageSelect.length; s++) {
                                    showRecord += '<option value="' + perPageSelect[s] +'">' + perPageSelect[s] + '</option>';
                                }
                showRecord += ' </select><span class="v4-show-record-per-page">Showing 1 - ' + settings.perPage + ' of ' + numItems + '</span> \
                            </div>';
            $(showRecord).appendTo($(settings.pagerSelector).parent().next());
        }
        
        $(".bes-search-" + currentTbody).on("keyup", function() {
            var besValue = $(this).val(),
                classValue = $(".field-" + currentTbody).val(),
                rowClosest = $('td.' + classValue + ':contains("' + besValue + '")').closest('tr');
                $('tbody#' + currentTbody + ' tr td.' + classValue).each(function (index, i) {
                    if($(this).text().toLowerCase().indexOf(besValue.toLowerCase()) === -1) {
                        $('tbody#' + currentTbody + ' tr').not(rowClosest).hide();
                    } else {
                        $(rowClosest).show();
                    }
                });
                calculateRow(rowClosest);
                if(besValue.length == 0) {
                    recall();
                }
        });

        $(".v4-select-show-record").change(function(){
            var perPageChg = $(this).val();
            
            var numItems = children.length;
            var numPages = Math.ceil(numItems/perPageChg);

            pager.html('');
            pager.data("curr",0);
            
            if (settings.showPrevNext){
                $('<li><a href="#" class="first_link">«</a></li>').appendTo(pager);
                $('<li><a href="#" class="prev_link">‹</a></a></li>').appendTo(pager);
            }
            
            var curr = 0;
            while(numPages > curr && (settings.hidePageNumbers==false)){
                $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
                curr++;
            }
            
            if (settings.showPrevNext){
                $('<li><a href="#" class="next_link">›</a></li>').appendTo(pager);
                $('<li><a href="#" class="last_link">»</a></li>').appendTo(pager);
            }
            
            pager.find('.page_link:first').addClass('active');
            // pager.find('.prev_link').hide();
            if (numPages<=1) {
                // pager.find('.next_link').hide();
            }
            pager.children().eq(2).addClass("active");
            
            children.hide();
            children.slice(0, perPageChg).show();
            
            pager.find('li .page_link').click(function(){
                var clickedPage = $(this).html().valueOf()-1;
                goTo(clickedPage,perPageChg);
                return false;
            });
            pager.find('li .first_link').click(function(){
                first();
                return false;
            });
            pager.find('li .prev_link').click(function(){
                previous();
                return false;
            });
            pager.find('li .next_link').click(function(){
                next();
                return false;
            });
            pager.find('li .last_link').click(function(){
                last();
                return false;
            });
            $(".v4-show-record-per-page").html('Showing 1 - ' + perPageChg + ' of ' + numItems);
        });

        function previous(){
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }
        
        function next(){
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function first(){
            goTo(1);
        }

        function last(){
            goToPage = parseInt(numPages);
            goTo(goToPage);
        }
        
        function goTo(page){
            var startAt = page * perPage,
                endOn = startAt + perPage;
            children.css('display','none').slice(startAt, endOn).show();
            
            // if (page>=1) {
            //     pager.find('.prev_link').show();
            // }
            // else {
            //     pager.find('.prev_link').hide();
            // }
            
            // if (page<(numPages-1)) {
            //     pager.find('.next_link').show();
            // }
            // else {
            //     pager.find('.next_link').hide();
            // }
            
            pager.data("curr",page);
            pager.children().removeClass("active");
            pager.children().eq(page+1).addClass("active");
        
        }

        function recall() {
            var numItems = children.length;
            var numPages = Math.ceil(numItems/perPage);
            pager.html('');
            pager.data("curr",0);
            
            if (settings.showPrevNext){
                $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
                $('<li><a href="#" class="prev_link">‹</a></a></li>').appendTo(pager);
            }
            
            var curr = 0;
            while(numPages > curr && (settings.hidePageNumbers==false)){
                $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
                curr++;
            }
            
            if (settings.showPrevNext){
                $('<li><a href="#" class="next_link">›</a></li>').appendTo(pager);
                $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
            }
            
            pager.find('.page_link:first').addClass('active');
            // pager.find('.prev_link').hide();
            if (numPages<=1) {
                // pager.find('.next_link').hide();
            }
            pager.children().eq(2).addClass("active");
            
            children.hide();
            children.slice(0, perPage).show();
            
            pager.find('li .page_link').click(function(){
                var clickedPage = $(this).html().valueOf()-1;
                goTo(clickedPage,perPage);
                return false;
            });
            pager.find('li .prev_link').click(function(){
                previous();
                return false;
            });
            pager.find('li .next_link').click(function(){
                next();
                return false;
            });
            $(".v4-show-record-per-page").html('Showing 1 - ' + settings.perPage + ' of ' + numItems);
        }

        function calculateRow(args){
            var numItemsSearch = args.length;
            var numPages = Math.ceil(numItemsSearch/perPage);
            pager.html('');
            pager.data("curr",0);
            
            if (settings.showPrevNext){
                $('<li><a href="#" class="first_link">«</a></li>').appendTo(pager);
                $('<li><a href="#" class="prev_link">‹</a></a></li>').appendTo(pager);
            }
            
            var curr = 0;
            while(numPages > curr && (settings.hidePageNumbers==false)){
                $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
                curr++;
            }
            
            if (settings.showPrevNext){
                $('<li><a href="#" class="next_link">›</a></li>').appendTo(pager);
                $('<li><a href="#" class="last_link">»</a></li>').appendTo(pager);
            }
            
            pager.find('.page_link:first').addClass('active');
            // pager.find('.prev_link').hide();
            if (numPages<=1) {
                // pager.find('.next_link').hide();
            }
            pager.children().eq(2).addClass("active");
            
            args.hide();
            args.slice(0, perPage).show();
            
            pager.find('li .page_link').click(function(){
                var clickedPage = $(this).html().valueOf()-1;
                goTo(clickedPage,perPage);
                return false;
            });
            pager.find('li .prev_link').click(function(){
                previous();
                return false;
            });
            pager.find('li .next_link').click(function(){
                next();
                return false;
            });
            $(".v4-show-record-per-page").html('Showing 1 - ' + settings.perPage + ' of ' + numItemsSearch);
        }
}