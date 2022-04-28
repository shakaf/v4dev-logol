<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
select.bes-select {
  display: none !important;
}
</style>
<form class="" action="<?= (!empty($collections) ? $collections['action'] : site_url('profile/setCallBackGarageStore')); ?>" autocomplete="off" method="post" id="v4-garage-info" name="v4-garage-info" autocomplete="off">
    <?= (!empty($collections) ? '<input type="hidden" name="garageId" value="' . $collections['attribute']['garageId']. '" wajib="yes" readonly>' : ''); ?>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="garageName" placeholder="Garage Name" wajib="yes" name="garageName" <?= (!empty($collections) ? 'value="' . $collections['attribute']['garageName'] . '"' : ''); ?>>
                <label for="garageName">Garage Name</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="garagePicName" placeholder="PIC Name" wajib="yes" name="garagePicName" <?= (!empty($collections) ? 'value="' . $collections['attribute']['garagePicName'] . '"' : ''); ?>>
                <label for="garagePicName">PIC Name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="garageOfficePhone" placeholder="Office Phone" wajib="yes" name="garageOfficePhone" <?= (!empty($collections) ? 'value="' . $collections['attribute']['garageOfficePhone'] . '"' : ''); ?>>
                <label for="garageOfficePhone">Office Phone</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-floating">
                <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="garageMobilePhone" placeholder="Mobile Phone" wajib="yes" name="garageMobilePhone">
                <label for="garageMobilePhone">Mobile Phone</label>
            </div>
        </div>
    </div>
    <div class="pin-address">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 t24-l24">
                <input type="text" name="garageAddressPin" id="v4-garage-address" class="form-control input-v4 input-v4-pl-40 w-100" placeholder="Write street Name/Building Name/Housing Area" <?= (!empty($collections) ? 'value="' . $collections['attribute']['garageAddress'] . '"' : ''); ?>>
                <div class="icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.33333 14.1667C11.555 14.1667 14.1667 11.555 14.1667 8.33333C14.1667 5.11167 11.555 2.5 8.33333 2.5C5.11167 2.5 2.5 5.11167 2.5 8.33333C2.5 11.555 5.11167 14.1667 8.33333 14.1667Z" stroke="#2C3E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 17.5L12.5 12.5" stroke="#2C3E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div id="v4-garage-pin" style="margin: 0 auto; width: 100%; height: 243px;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 t24-l24">
                <input type="text" name="garageAddressLatLong" id="v4-garage-address-latlang" class="form-control input-v4 input-v4-pl-40 w-100" placeholder="-">
                <div class="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#868A92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#868A92" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
        <div style="height: 36px;">&nbsp</div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center"><span style="color: #0D51F1; font-size: 14px; cursor: pointer;" id="manual-address-wrapper">Or Set Manually Address ></span></div>
        </div>
    </div>
    <div class="manual-address" style="display: none;">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form">
                    <label for="">Province</label>
                    <?= form_dropdown('provinceId', $provinceId, (!empty($collections) ? $collections['attribute']['garageProvinceId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="provinceId" data-url="' . site_url('autocomplete/getCityByProvince'). '" data-target="cityId"'); ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form">
                    <label for="">City</label>
                    <?= form_dropdown('cityId', $cityId, (!empty($collections) ? $collections['attribute']['garageCityId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="cityId" data-url="' . site_url('autocomplete/getDistrictByCity'). '" data-target="districtId"'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form">
                    <label for="">District</label>
                    <?= form_dropdown('districtId', $districtId, (!empty($collections) ? $collections['attribute']['garageDistrictId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="districtId" data-url="' . site_url('autocomplete/getAreaIdByDistrict'). '" data-target="areaId"'); ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form">
                    <label for="">Area</label>
                    <?= form_dropdown('areaId', $areaId, (!empty($collections) ? $collections['attribute']['garageAreaId'] : ''), 'class="form-control input-v4-mb-8 input-v4-pl-12 w-100 bes-select" id="areaId"'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-floating">
                    <textarea class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="garageAddress" placeholder="Address" name="garageAddress" style="height: 80px; resize: none;"><?= (!empty($collections) ? $collections['attribute']['garageAddress']: ''); ?></textarea>
                    <label for="garageAddress">Address</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-floating">
                    <input type="text" class="form-control input-v4 input-v4-mb-8 input-v4-pl-12 w-100" id="postalCode" placeholder="Postal Code" name="postalCode" <?= (!empty($collections) ? 'value="' . $collections['attribute']['postalCode'] . '"' : ''); ?>>
                    <label for="postalCode">Postal Code</label>
                </div>
            </div>
        </div>
        <div style="height: 36px;">&nbsp</div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center"><span style="color: #0D51F1; font-size: 14px; cursor: pointer;" id="pin-address-wrapper">< Back to set with pin point</span></div>
        </div>
    </div>
    <div style="height: 36px;">&nbsp</div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="wrapper-buttons-dialog wrapper-w-loader" id="<?= rand(); ?>">
                <button class="btn-container-dialog btn-dialog-cancel company-edit-cancel" id="<?= rand(); ?>">Cancel</button>
                <button class="btn-container-dialog btn-dialog-submit" id="<?= rand(); ?>" onclick="v4DoPost('v4-garage-info', $(this), 'v4-list-garage-active'); return false;"><?= (!empty($collections) ? 'Update' : 'Save'); ?></button>
            </div>
        </div>
    </div>
</form>
<script>
    function autocompleteWithEnter(map) {
        const searchInput = document.getElementById("v4-garage-address");
        const options = {};
        const autocomplete = new google.maps.places.Autocomplete( searchInput, options);
        let markersArray = [];
        let hasDownBeenPressed = false;
        searchInput.addEventListener("keydown", (e) => {
            if (e.keyCode === 40) {
                hasDownBeenPressed = true;
            }
        });
        google.maps.event.addDomListener(searchInput, "keydown", (e) => {
            e.cancelBubble = true;
            if (e.keyCode === 13 || e.keyCode === 9) {
                if (!hasDownBeenPressed && !e.hasRanOnce) {
                    google.maps.event.trigger(e.target, "keydown", {
                        keyCode: 40,
                        hasRanOnce: true
                    });
                }
            }
        });
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            const place = autocomplete.getPlace();
            if (typeof place.address_components !== "undefined") {
                hasDownBeenPressed = false;
                const returnedCoords = new google.maps.LatLng(
                    place.geometry.location.lat(),
                    place.geometry.location.lng()
                );
                const userLocation = {
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng()
                };
                var marker = new google.maps.Marker({
                    map: map,
                    draggable:true,
                    position: returnedCoords,
                    animation: google.maps.Animation.DROP,
                    icon: 'https://econ.npct1.co.id/public/img/v4-marker-custom.png'
                });
                map.setCenter(returnedCoords);
                map.setZoom(18);
                getRoute(map, userLocation);
                $("#v4-garage-address-latlang").val(userLocation.lat + ', ' + userLocation.lng);
            }
            google.maps.event.addListener(marker, 'dragend', function() {
                geocodePosition(marker.getPosition());
            });
        });
        function geocodePosition(pos) {
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({latLng: pos}, function(results, status){
                if (status == google.maps.GeocoderStatus.OK) {
                    $("#v4-garage-address").val(results[0].formatted_address);
                    $("#v4-garage-address-latlang").val(results[0].geometry.location.lat() + ', ' + results[0].geometry.location.lng());
                }  else  {
                    console.log(status);
                }
            });
        }
        function getRoute(map, coords) {
            const directionsDisplay = new google.maps.DirectionsRenderer({
                map: map,
                suppressMarkers: true,
                preserveViewport: false,
                polylineOptions: {
                    strokeWeight: 4,
                    strokeColor: "#e30613"
                }
            });
            const directionsService = new google.maps.DirectionsService();
            const request = {
                origin: coords,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
            directionsService.route(request, (response, status) => {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    console.warn(status);
                }
            });
        }
        searchInput.addEventListener("focus", () => {
            hasDownBeenPressed = false;
            searchInput.value = "";
        });
    }
    function initialize() {
        var color = "#ECF1F4";
        var styleArray = [
            {
            "featureType": "landscape",
            "stylers": [
                {"saturation": -100},
                {"lightness": 65},
                {"visibility": "on"}
            ]
            },
            {
            "featureType": "poi",
            "stylers": [
                {"saturation": -100},
                {"lightness": 10},
                {"visibility": "simplified"}
            ]
            },
            {
            "featureType": "road.highway",
            "stylers": [
                {"saturation": -100},
                {"visibility": "simplified"}
            ]
            },
            {
            "featureType": "road.arterial",
            "stylers": [
                {"saturation": -100},
                {"lightness": 30},
                {"visibility": "on"}
            ]
            },
            {
            "featureType": "road.local",
            "stylers": [
                {"saturation": -100},
                {"lightness": 40},
                {"visibility": "on"}
            ]
            },
            {
            "featureType": "transit",
            "stylers": [
                {"saturation": -100},
                {"visibility": "simplified"}
            ]
            },
            {
            "featureType": "administrative.province",
            "stylers": [
                {"visibility": "off"}
            ]
            },
            {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [
                {"visibility": "on"},
                { "lightness": -25 },
                { "saturation": -100}
            ]
            },
            {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {"hue": color},
                {"lightness": -10},
                {"saturation": -90}
            ]
            }
        ];
        let latitude = -6.2087634;
        let longitude = 106.845599;
        let center = new google.maps.LatLng(latitude, longitude);
        const mapOptions = {
            center: center,
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles:styleArray,
            streetViewControl: false,
            disableDefaultUI: true
        };
        const map = new google.maps.Map(
            document.getElementById("v4-garage-pin"),
            mapOptions
        );
        autocompleteWithEnter(map);
    }
    initialize();
    function besSelect() {
        $('select.bes-select').each(function (i, select) {
            if (!$(this).next().hasClass('dropdown-select')) {
                $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                var dropdown = $(this).next();
                var options = $(select).find('option');
                var selected = $(this).find('option:selected');
                dropdown.find('.current').html(selected.data('display-text') || selected.text());
                options.each(function (j, o) {
                    var display = $(o).data('display-text') || '';
                    dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                });
            }
        });
        $('.dropdown-select ul').before('<div class="dd-search"><input class="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
    }
    $(document).on('click', '.dropdown-select', function (event) {
        if($(event.target).hasClass('dd-searchbox')){
            return;
        }
        $('.dropdown-select').not($(this)).removeClass('open');
        $(this).toggleClass('open');
        if ($(this).hasClass('open')) {
            $(this).find('.option').attr('tabindex', 0);
            $(this).find('.selected').focus();
        } else {
            $(this).find('.option').removeAttr('tabindex');
            $(this).focus();
        }
    });
    $(document).on('click', function (event) {
        if ($(event.target).closest('.dropdown-select').length === 0) {
            $('.dropdown-select').removeClass('open');
            $('.dropdown-select .option').removeAttr('tabindex');
        }
        event.stopPropagation();
    });

    function filter(){
        var valThis = $('.txtSearchValue').val();
        $('.dropdown-select ul > li').each(function(){
        var text = $(this).text();
            (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();         
        });
    };
    $(document).on('click', '.dropdown-select .option', function (event) {
        $(this).closest('.list').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        var text = $(this).data('display-text') || $(this).text();
        $(this).closest('.dropdown-select').find('.current').text(text);
        $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
        var params = {
            q: $(this).data('value'),
            csrf_v4kalibaru: $('meta[name="csrf_v4kalibaru"]').attr('content')
        };
        var kalibaru = $(this).parent().parent().prev().parent().prev(),
            id = kalibaru.attr('id'),
            url = kalibaru.attr('data-url'),
            chain = kalibaru.attr('data-target');
            $('#' + id).val([]);
            $('#' + id + ' option[value="' + $(this).data('value') + '"]').attr("selected","selected");
            if($('.bes-select-input-' + id).length > 0) $('.bes-select-input-' + id).remove();
            input = '<input type="hidden" class="bes-select-input-' + id + '" name="' + id + '" value="' + $(this).data('value') + '">';
            $(input).insertBefore('#' + id);
        if(chain){
            $.ajax({
                type: 'POST',
                url: url,
                data: params,
                dataType: 'json',
                beforeSend: function() {
                },
                complete: function() {
                },
                success: function(data) {
                    var collections = data.length;
                    if(collections > 0) {
                        $("#" + chain).children('option:not(:first)').remove();
                        for(var a = 0; a < collections; a++){
                            var options = $('<option/>');
                                options.attr('value', data[a].value);
                                options.text(data[a].option);
                                $("#" + chain).append(options);
                        }
                        var dropdownChain = $("#" + chain).next(),
                            optionsChain = $("#" + chain).find('option'),
                            selectedChain = $("#" + chain).find('option:selected');
                            dropdownChain.children('.current').html('');
                            dropdownChain.children().next().children().next().empty();
                            optionsChain.each(function (j, o) {
                                var displayChain = $(o).data('display-text') || '';
                                dropdownChain.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + displayChain + '">' + $(o).text() + '</li>');
                            });
                    }
                }
            });
        }    
    });
    $(document).on('keydown', '.dropdown-select', function (event) {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
        if (event.keyCode == 13) {
            if ($(this).hasClass('open')) {
                focused_option.trigger('click');
            } else {
                $(this).trigger('click');
            }
            return false;
        } else if (event.keyCode == 40) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                focused_option.next().focus();
            }
            return false;
        } else if (event.keyCode == 38) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
                focused_option.prev().focus();
            }
            return false;
        } else if (event.keyCode == 27) {
            if ($(this).hasClass('open')) {
                $(this).trigger('click');
            }
            return false;
        }
    });
    $(document).ready(function () {
        besSelect();
        $(".company-edit-cancel").on("click", function(){
            if ($(".kbaru-modal").length > 0) {
                $(".kbaru-modal").remove();
            }
            return false;
        });
        $("#manual-address-wrapper").on("click", function(){
            $(".manual-address").show().fadeIn();
            $(".pin-address").hide().fadeOut();
        });
        $("#pin-address-wrapper").on("click", function(){
            $(".manual-address").hide().fadeOut();
            $(".pin-address").show().fadeIn();
        });
    });
</script>