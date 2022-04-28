<style>
    .btn-link{
        color: black;

    }

    .btn-link:hover{
        text-decoration: none !important;
        
    }
    .card-header{
        padding-left: 1em !important;
        padding-right: 1em !important;
        padding-bottom: 0em !important;
        vertical-align: center;
        
    }

    ul li p {
        font-weight: 400;
        font-size: 12px;
        color: #8C8CA2;
    }

    .months button {
        background: #405EA3;
        border-radius: 15.5px;
        width: 70px;
        height: 22px;
        font-size: 9px;
    }

    .slider {
  width: 300px;
  height: 200px;
}
.wrapper {
  overflow: hidden;
  position: relative;
  background: #222;
  z-index: 1;
}
#items {
  width: 10000px;
  position: relative;
  top: 0;
  left: -300px;
}
#items.shifting {
  transition: left .2s ease-out;
}
.slide {
  width: 300px;
  height: 200px;
  cursor: pointer;
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center;
  transition: all 1s;
  position: relative;
  background: #FFFFFF;
}

.control {
  position: absolute;
  top: 50%;
  width: 40px;
  height: 40px;
  background: #fff;
  border-radius: 20px;
  margin-top: -20px;
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
  z-index: 2;
}
.prev,
.next {
  background-size: 22px;
  background-position: center;
  background-repeat: no-repeat;
  cursor: pointer;
}
.prev {
  background-image: url(ChevronLeft.png);
  left: -20px;
}
.next {
  background-image: url(ChevronRight-512.png);
  right: -20px;
}
.prev:active,
.next:active {
  transform: scale(0.8);
}
</style>
                <div class="page-content" style="background-color: #F8F8F9;">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-4">
                        </div>
                            <div class="col-lg-4">

                                <div class="card">
                                    <div class="card-header bg-transparent border-bottom">
                                        <p>Back</p>
                                    </div>
                                    <div class="card-header bg-transparent border-bottom">
                                        <div class="row" style="font-weight: 700; font-size:14px">
                                            <div class="col-md-6 col-sm-6" align="left">
                                                <p>Total Amounts</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6" align="right">
                                                <p>Rp 1.500.500</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header bg-transparent border-bottom">
                                        <div class="row">
                                            <div class="col-md-10 cold-sm-10">
                                            <button type="button" class="btn btn-link waves-effect">
                                                 Financing
                                            </button>
                                            </div>
                                            <div class="col-md-2 cold-sm-2">
                                                <a href="#"><span style="margin-right: 0; line-height:50px; font-weight: 700; font-size: 9px;color: #497DF5;">
                                                    CHANGE
                                                </span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-3 align-items-center months" style="margin-bottom: 10px;">
                                            <span><button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">6 Month</button></span>
                                            <span><button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">3 Month</button></span>
                                            <span><button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">30 Days / 1 Month</button></span>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-sm-3">
                                                
                                                <svg width="60" height="24" viewBox="0 0 60 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="60" height="24" fill="url(#pattern0)"/>
                                                <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#image0_1890_68849" transform="scale(0.00740741 0.0169492)"/>
                                                </pattern>
                                                <image id="image0_1890_68849" width="135" height="59" xlink:href="data:image/png;base64,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"/>
                                                </defs>
                                                </svg>

                                            </div>
                                            <div class="col-sm-6">Logol Financing</div>
                                            <div class="col-sm-3">
                                                <svg width="104" height="24" viewBox="0 0 104 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.37584 9.60436C-0.216427 10.8046 -0.216427 13.1954 1.37584 14.3956L14.0655 23.9609C14.0709 23.965 14.0741 23.9714 14.0741 23.9783C14.0741 23.9903 14.0839 24 14.0959 24H14.1174H101C102.657 24 104 22.6569 104 21V3C104 1.34315 102.657 0 101 0H14.1174H14.0959C14.0839 0 14.0741 0.00973472 14.0741 0.0217431C14.0741 0.0285684 14.0709 0.0349974 14.0655 0.0391058L1.37584 9.60436Z" fill="#002985"/>
                                                <path d="M18.7477 16V8.72727H21.752C22.2965 8.72727 22.7664 8.82552 23.1618 9.02202C23.5595 9.21615 23.8661 9.4955 24.0815 9.86009C24.2969 10.2223 24.4047 10.652 24.4047 11.1491C24.4047 11.6534 24.2946 12.0819 24.0744 12.4347C23.8542 12.785 23.5417 13.0526 23.1369 13.2372C22.7321 13.4195 22.2527 13.5107 21.6987 13.5107H19.7988V12.1257H21.372C21.6371 12.1257 21.8585 12.0914 22.036 12.0227C22.216 11.9517 22.3521 11.8452 22.4444 11.7031C22.5368 11.5587 22.5829 11.3741 22.5829 11.1491C22.5829 10.9242 22.5368 10.7384 22.4444 10.5916C22.3521 10.4425 22.216 10.3312 22.036 10.2578C21.8561 10.1821 21.6348 10.1442 21.372 10.1442H20.5055V16H18.7477ZM22.8422 12.6761L24.6532 16H22.7356L20.96 12.6761H22.8422ZM27.9111 16.103C27.3405 16.103 26.8481 15.9905 26.4338 15.7656C26.0219 15.5384 25.7046 15.2152 25.4821 14.7962C25.2619 14.3748 25.1518 13.8741 25.1518 13.294C25.1518 12.7306 25.2631 12.2382 25.4857 11.8168C25.7082 11.393 26.0219 11.0639 26.4267 10.8295C26.8315 10.5928 27.3086 10.4744 27.8578 10.4744C28.2461 10.4744 28.6012 10.5348 28.9232 10.6555C29.2451 10.7763 29.5233 10.955 29.7577 11.1918C29.992 11.4285 30.1743 11.7209 30.3045 12.0689C30.4348 12.4145 30.4999 12.8111 30.4999 13.2585V13.6918H25.7591V12.6832H28.8841C28.8817 12.4986 28.8379 12.334 28.7527 12.1896C28.6675 12.0452 28.5503 11.9328 28.4011 11.8523C28.2544 11.7694 28.0851 11.728 27.8933 11.728C27.6992 11.728 27.5252 11.7718 27.3713 11.8594C27.2174 11.9446 27.0955 12.0618 27.0055 12.2109C26.9156 12.3577 26.8682 12.5246 26.8635 12.7116V13.7379C26.8635 13.9605 26.9073 14.1558 26.9949 14.3239C27.0825 14.4896 27.2068 14.6186 27.3678 14.7109C27.5287 14.8033 27.7205 14.8494 27.943 14.8494C28.0969 14.8494 28.2366 14.8281 28.3621 14.7855C28.4875 14.7429 28.5953 14.6802 28.6852 14.5973C28.7752 14.5144 28.8427 14.4126 28.8876 14.2919L30.4821 14.3381C30.4158 14.6955 30.2702 15.0069 30.0453 15.272C29.8228 15.5348 29.5304 15.7396 29.1682 15.8864C28.806 16.0308 28.3869 16.103 27.9111 16.103ZM34.0329 16.103C33.4576 16.103 32.964 15.9846 32.5521 15.7479C32.1425 15.5111 31.8277 15.1821 31.6075 14.7607C31.3873 14.3369 31.2772 13.8468 31.2772 13.2905C31.2772 12.7318 31.3873 12.2417 31.6075 11.8203C31.83 11.3965 32.1461 11.0663 32.5556 10.8295C32.9676 10.5928 33.4588 10.4744 34.0294 10.4744C34.5336 10.4744 34.9728 10.5656 35.3468 10.7479C35.7233 10.9302 36.0168 11.1882 36.2275 11.522C36.4406 11.8535 36.553 12.2429 36.5649 12.6903H34.942C34.9089 12.411 34.8142 12.192 34.6579 12.0334C34.504 11.8748 34.3028 11.7955 34.0542 11.7955C33.853 11.7955 33.6766 11.8523 33.5251 11.9659C33.3736 12.0772 33.2552 12.2429 33.17 12.4631C33.0871 12.6809 33.0457 12.9508 33.0457 13.2727C33.0457 13.5947 33.0871 13.867 33.17 14.0895C33.2552 14.3097 33.3736 14.4766 33.5251 14.5902C33.6766 14.7015 33.853 14.7571 34.0542 14.7571C34.2152 14.7571 34.3573 14.7228 34.4804 14.6541C34.6058 14.5855 34.7088 14.4848 34.7893 14.3523C34.8698 14.2173 34.9207 14.054 34.942 13.8622H36.5649C36.5483 14.312 36.4359 14.705 36.2275 15.0412C36.0216 15.3774 35.7315 15.639 35.3575 15.826C34.9858 16.0107 34.5443 16.103 34.0329 16.103ZM40.0997 16.103C39.5268 16.103 39.0344 15.9858 38.6224 15.7514C38.2129 15.5147 37.8968 15.1856 37.6743 14.7642C37.4541 14.3404 37.344 13.8492 37.344 13.2905C37.344 12.7294 37.4541 12.2382 37.6743 11.8168C37.8968 11.393 38.2129 11.0639 38.6224 10.8295C39.0344 10.5928 39.5268 10.4744 40.0997 10.4744C40.6726 10.4744 41.1639 10.5928 41.5734 10.8295C41.9854 11.0639 42.3014 11.393 42.5216 11.8168C42.7441 12.2382 42.8554 12.7294 42.8554 13.2905C42.8554 13.8492 42.7441 14.3404 42.5216 14.7642C42.3014 15.1856 41.9854 15.5147 41.5734 15.7514C41.1639 15.9858 40.6726 16.103 40.0997 16.103ZM40.1104 14.7926C40.3187 14.7926 40.4951 14.7287 40.6395 14.6009C40.7839 14.473 40.894 14.2955 40.9697 14.0682C41.0479 13.8409 41.0869 13.5781 41.0869 13.2798C41.0869 12.9768 41.0479 12.7116 40.9697 12.4844C40.894 12.2571 40.7839 12.0795 40.6395 11.9517C40.4951 11.8239 40.3187 11.7599 40.1104 11.7599C39.8949 11.7599 39.7126 11.8239 39.5635 11.9517C39.4167 12.0795 39.3043 12.2571 39.2261 12.4844C39.1504 12.7116 39.1125 12.9768 39.1125 13.2798C39.1125 13.5781 39.1504 13.8409 39.2261 14.0682C39.3043 14.2955 39.4167 14.473 39.5635 14.6009C39.7126 14.7287 39.8949 14.7926 40.1104 14.7926ZM43.845 16V10.5455H45.4962V11.5469H45.5566C45.6702 11.2154 45.862 10.9538 46.1319 10.7621C46.4018 10.5703 46.7237 10.4744 47.0978 10.4744C47.4766 10.4744 47.8009 10.5715 48.0708 10.7656C48.3407 10.9598 48.5123 11.2202 48.5857 11.5469H48.6425C48.7443 11.2225 48.9432 10.9633 49.2391 10.7692C49.5351 10.5727 49.8843 10.4744 50.2867 10.4744C50.8028 10.4744 51.2219 10.6402 51.5438 10.9716C51.8658 11.3007 52.0268 11.7528 52.0268 12.3281V16H50.2903V12.7259C50.2903 12.4536 50.2204 12.2464 50.0808 12.1044C49.9411 11.96 49.76 11.8878 49.5374 11.8878C49.2983 11.8878 49.1101 11.9659 48.9728 12.1222C48.8379 12.276 48.7704 12.4832 48.7704 12.7436V16H47.1013V12.7081C47.1013 12.4548 47.0327 12.2547 46.8954 12.108C46.7581 11.9612 46.577 11.8878 46.3521 11.8878C46.2005 11.8878 46.0668 11.9245 45.9508 11.9979C45.8348 12.0689 45.7436 12.1707 45.6773 12.3033C45.6134 12.4358 45.5815 12.5921 45.5815 12.772V16H43.845ZM55.7525 16.103C55.1819 16.103 54.6895 15.9905 54.2752 15.7656C53.8633 15.5384 53.546 15.2152 53.3235 14.7962C53.1033 14.3748 52.9933 13.8741 52.9933 13.294C52.9933 12.7306 53.1045 12.2382 53.3271 11.8168C53.5496 11.393 53.8633 11.0639 54.2681 10.8295C54.6729 10.5928 55.15 10.4744 55.6992 10.4744C56.0875 10.4744 56.4426 10.5348 56.7646 10.6555C57.0865 10.7763 57.3647 10.955 57.5991 11.1918C57.8335 11.4285 58.0157 11.7209 58.146 12.0689C58.2762 12.4145 58.3413 12.8111 58.3413 13.2585V13.6918H53.6005V12.6832H56.7255C56.7231 12.4986 56.6793 12.334 56.5941 12.1896C56.5089 12.0452 56.3917 11.9328 56.2425 11.8523C56.0958 11.7694 55.9265 11.728 55.7347 11.728C55.5406 11.728 55.3666 11.7718 55.2127 11.8594C55.0588 11.9446 54.9369 12.0618 54.8469 12.2109C54.757 12.3577 54.7096 12.5246 54.7049 12.7116V13.7379C54.7049 13.9605 54.7487 14.1558 54.8363 14.3239C54.9239 14.4896 55.0482 14.6186 55.2092 14.7109C55.3701 14.8033 55.5619 14.8494 55.7844 14.8494C55.9383 14.8494 56.078 14.8281 56.2035 14.7855C56.329 14.7429 56.4367 14.6802 56.5266 14.5973C56.6166 14.5144 56.6841 14.4126 56.729 14.2919L58.3235 14.3381C58.2572 14.6955 58.1116 15.0069 57.8867 15.272C57.6642 15.5348 57.3718 15.7396 57.0096 15.8864C56.6474 16.0308 56.2283 16.103 55.7525 16.103ZM61.0647 12.8892V16H59.3282V10.5455H60.9794V11.5469H61.0398C61.1605 11.2131 61.3665 10.9515 61.6577 10.7621C61.9489 10.5703 62.2957 10.4744 62.6982 10.4744C63.0817 10.4744 63.4143 10.5608 63.6961 10.7337C63.9801 10.9041 64.2003 11.1432 64.3566 11.451C64.5152 11.7564 64.5933 12.1139 64.5909 12.5234V16H62.8544V12.8643C62.8568 12.5613 62.7799 12.3246 62.6236 12.1541C62.4697 11.9837 62.2555 11.8984 61.9809 11.8984C61.7986 11.8984 61.6376 11.9387 61.4979 12.0192C61.3606 12.0973 61.2541 12.2098 61.1783 12.3565C61.1049 12.5033 61.067 12.6809 61.0647 12.8892ZM67.7582 16.0781C67.3558 16.0781 66.99 15.974 66.6609 15.7656C66.3319 15.5573 66.0691 15.2448 65.8726 14.8281C65.6761 14.4115 65.5778 13.8942 65.5778 13.2763C65.5778 12.6347 65.6796 12.1068 65.8832 11.6925C66.0868 11.2782 66.3532 10.9716 66.6822 10.7727C67.0137 10.5739 67.37 10.4744 67.7511 10.4744C68.0376 10.4744 68.2826 10.5241 68.4862 10.6236C68.6898 10.7206 68.8579 10.8461 68.9905 11C69.1231 11.1539 69.2237 11.3137 69.2923 11.4794H69.3278V8.72727H71.0643V16H69.3456V15.1158H69.2923C69.2189 15.2839 69.1148 15.4413 68.9798 15.5881C68.8449 15.7348 68.6756 15.8532 68.472 15.9432C68.2708 16.0331 68.0329 16.0781 67.7582 16.0781ZM68.3619 14.7251C68.5726 14.7251 68.7526 14.666 68.9017 14.5476C69.0509 14.4268 69.1657 14.2576 69.2462 14.0398C69.3267 13.822 69.3669 13.5663 69.3669 13.2727C69.3669 12.9744 69.3267 12.7176 69.2462 12.5021C69.168 12.2867 69.0532 12.121 68.9017 12.005C68.7526 11.889 68.5726 11.831 68.3619 11.831C68.1465 11.831 67.9642 11.8902 67.8151 12.0085C67.6659 12.1269 67.5523 12.2938 67.4741 12.5092C67.3984 12.7247 67.3605 12.9792 67.3605 13.2727C67.3605 13.5663 67.3996 13.822 67.4777 14.0398C67.5558 14.2576 67.6683 14.4268 67.8151 14.5476C67.9642 14.666 68.1465 14.7251 68.3619 14.7251ZM73.8002 16.0923C73.4522 16.0923 73.1432 16.0343 72.8733 15.9183C72.6058 15.8 72.3939 15.6224 72.2377 15.3857C72.0838 15.1465 72.0069 14.8471 72.0069 14.4872C72.0069 14.1842 72.0601 13.9285 72.1667 13.7202C72.2732 13.5118 72.42 13.3426 72.607 13.2124C72.794 13.0821 73.0095 12.9839 73.2533 12.9176C73.4971 12.849 73.7576 12.8028 74.0346 12.7791C74.3447 12.7507 74.5944 12.7211 74.7838 12.6903C74.9732 12.6572 75.1105 12.611 75.1958 12.5518C75.2834 12.4903 75.3272 12.4039 75.3272 12.2926V12.2749C75.3272 12.0926 75.2644 11.9517 75.139 11.8523C75.0135 11.7528 74.8442 11.7031 74.6311 11.7031C74.4015 11.7031 74.2168 11.7528 74.0772 11.8523C73.9375 11.9517 73.8487 12.089 73.8108 12.2642L72.2093 12.2074C72.2566 11.8759 72.3785 11.58 72.575 11.3196C72.7739 11.0568 73.0462 10.8509 73.3918 10.7017C73.7398 10.5502 74.1577 10.4744 74.6453 10.4744C74.9934 10.4744 75.3141 10.5159 75.6077 10.5987C75.9013 10.6792 76.1569 10.7976 76.3748 10.9538C76.5926 11.1077 76.7606 11.2971 76.879 11.522C76.9998 11.7469 77.0601 12.0038 77.0601 12.2926V16H75.4266V15.2401H75.384C75.2869 15.4247 75.1626 15.581 75.0111 15.7088C74.862 15.8366 74.6856 15.9325 74.482 15.9964C74.2808 16.0604 74.0535 16.0923 73.8002 16.0923ZM74.3364 14.956C74.5234 14.956 74.6915 14.9181 74.8407 14.8423C74.9922 14.7666 75.1129 14.6624 75.2029 14.5298C75.2928 14.3949 75.3378 14.2386 75.3378 14.0611V13.5426C75.2881 13.5687 75.2277 13.5923 75.1567 13.6136C75.0881 13.6349 75.0123 13.6551 74.9294 13.674C74.8466 13.6929 74.7614 13.7095 74.6738 13.7237C74.5862 13.7379 74.5021 13.7509 74.4216 13.7628C74.2583 13.7888 74.1186 13.8291 74.0026 13.8835C73.889 13.938 73.8014 14.009 73.7398 14.0966C73.6806 14.1818 73.651 14.2836 73.651 14.402C73.651 14.5819 73.7149 14.7192 73.8428 14.8139C73.973 14.9086 74.1375 14.956 74.3364 14.956ZM81.3007 10.5455V11.8239H77.8597V10.5455H81.3007ZM78.5806 9.23864H80.3171V14.2848C80.3171 14.3913 80.3337 14.4777 80.3668 14.544C80.4023 14.608 80.4532 14.6541 80.5195 14.6825C80.5858 14.7086 80.6651 14.7216 80.7574 14.7216C80.8237 14.7216 80.8936 14.7157 80.9669 14.7038C81.0427 14.6896 81.0995 14.6778 81.1374 14.6683L81.4002 15.9219C81.3173 15.9455 81.2001 15.9751 81.0486 16.0107C80.8995 16.0462 80.7207 16.0687 80.5124 16.0781C80.1052 16.0971 79.756 16.0497 79.4648 15.9361C79.176 15.8201 78.9546 15.6402 78.8007 15.3963C78.6492 15.1525 78.5758 14.8459 78.5806 14.4766V9.23864ZM82.2868 16V10.5455H84.0233V16H82.2868ZM83.1568 9.9098C82.9129 9.9098 82.7034 9.82931 82.5282 9.66832C82.353 9.50497 82.2654 9.30848 82.2654 9.07884C82.2654 8.85156 82.353 8.65743 82.5282 8.49645C82.7034 8.3331 82.9129 8.25142 83.1568 8.25142C83.403 8.25142 83.6125 8.3331 83.7853 8.49645C83.9605 8.65743 84.0481 8.85156 84.0481 9.07884C84.0481 9.30848 83.9605 9.50497 83.7853 9.66832C83.6125 9.82931 83.403 9.9098 83.1568 9.9098ZM87.7747 16.103C87.2018 16.103 86.7094 15.9858 86.2974 15.7514C85.8879 15.5147 85.5718 15.1856 85.3493 14.7642C85.1291 14.3404 85.019 13.8492 85.019 13.2905C85.019 12.7294 85.1291 12.2382 85.3493 11.8168C85.5718 11.393 85.8879 11.0639 86.2974 10.8295C86.7094 10.5928 87.2018 10.4744 87.7747 10.4744C88.3476 10.4744 88.8389 10.5928 89.2484 10.8295C89.6604 11.0639 89.9764 11.393 90.1966 11.8168C90.4191 12.2382 90.5304 12.7294 90.5304 13.2905C90.5304 13.8492 90.4191 14.3404 90.1966 14.7642C89.9764 15.1856 89.6604 15.5147 89.2484 15.7514C88.8389 15.9858 88.3476 16.103 87.7747 16.103ZM87.7854 14.7926C87.9937 14.7926 88.1701 14.7287 88.3145 14.6009C88.4589 14.473 88.569 14.2955 88.6447 14.0682C88.7229 13.8409 88.7619 13.5781 88.7619 13.2798C88.7619 12.9768 88.7229 12.7116 88.6447 12.4844C88.569 12.2571 88.4589 12.0795 88.3145 11.9517C88.1701 11.8239 87.9937 11.7599 87.7854 11.7599C87.5699 11.7599 87.3876 11.8239 87.2385 11.9517C87.0917 12.0795 86.9793 12.2571 86.9011 12.4844C86.8254 12.7116 86.7875 12.9768 86.7875 13.2798C86.7875 13.5781 86.8254 13.8409 86.9011 14.0682C86.9793 14.2955 87.0917 14.473 87.2385 14.6009C87.3876 14.7287 87.5699 14.7926 87.7854 14.7926ZM93.2565 12.8892V16H91.52V10.5455H93.1712V11.5469H93.2316C93.3523 11.2131 93.5583 10.9515 93.8495 10.7621C94.1407 10.5703 94.4875 10.4744 94.89 10.4744C95.2735 10.4744 95.6061 10.5608 95.8879 10.7337C96.1719 10.9041 96.3921 11.1432 96.5484 11.451C96.707 11.7564 96.7851 12.1139 96.7827 12.5234V16H95.0462V12.8643C95.0486 12.5613 94.9717 12.3246 94.8154 12.1541C94.6615 11.9837 94.4473 11.8984 94.1727 11.8984C93.9904 11.8984 93.8294 11.9387 93.6897 12.0192C93.5524 12.0973 93.4459 12.2098 93.3701 12.3565C93.2967 12.5033 93.2588 12.6809 93.2565 12.8892Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:25px;">
                                            <p>Payment Details</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">Interest (1.1%)</div>
                                            <div class="col-sm-6">Rp 260.000</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">Service Fee</div>
                                            <div class="col-sm-6">Free</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">Due Date</div>
                                            <div class="col-sm-6">05 every month</div>
                                        </div>
                                        <div class="row" style="margin-top:20px; margin-bottom:20px; padding-top:10px; padding-bottom:10px; padding-left:10px; padding-right: 10px; background-color: #F8F8F9;">
                                            <div class="col-sm-6">Monthly Paid</div>
                                            <div class="col-sm-6">Rp 240.000</div>
                                        </div>
                                        <div class="row" style="padding-left:15px;">
                                            <h7>info</h7>
                                            <ul>
                                                <li>Quick approval</li>
                                                <li>No minimum transaction</li>
                                                <li>Free “service fee” when first using our platform</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="card-header bg-transparent border-top">
                                        <a href="<?= site_url('payment-detail') ?>" class="btn " style=" background-color: white; width:100%; margin-bottom:10px; color:#0D51F1;">Select</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                               
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            
                <script>
                   var slider = document.getElementById('slider'),
    sliderItems = document.getElementById('items'),
    prev = document.getElementById('prev'),
    next = document.getElementById('next');
slide(slider, sliderItems, prev, next);
function slide(wrapper, items, prev, next) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.getElementsByClassName('slide'),
      slidesLength = slides.length,
      slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
      firstSlide = slides[0],
      lastSlide = slides[slidesLength - 1],
      cloneFirst = firstSlide.cloneNode(true),
      cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;
  
  // Clone first and last slide
  items.appendChild(cloneFirst);
  items.insertBefore(cloneLast, firstSlide);
  wrapper.classList.add('loaded');
  
  // Mouse and Touch events
  items.onmousedown = dragStart;
  
  // Touch events
  items.addEventListener('touchstart', dragStart);
  items.addEventListener('touchend', dragEnd);
  items.addEventListener('touchmove', dragAction);
  
  // Click events
  prev.addEventListener('click', function () { shiftSlide(-1) });
  next.addEventListener('click', function () { shiftSlide(1) });
  
  // Transition events
  items.addEventListener('transitionend', checkIndex);
  
  function dragStart (e) {
    e = e || window.event;
    e.preventDefault();
    posInitial = items.offsetLeft;
    
    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }
  function dragAction (e) {
    e = e || window.event;
    
    if (e.type == 'touchmove') {
      posX2 = posX1 - e.touches[0].clientX;
      posX1 = e.touches[0].clientX;
    } else {
      posX2 = posX1 - e.clientX;
      posX1 = e.clientX;
    }
    items.style.left = (items.offsetLeft - posX2) + "px";
  }
  
  function dragEnd (e) {
    posFinal = items.offsetLeft;
    if (posFinal - posInitial < -threshold) {
      shiftSlide(1, 'drag');
    } else if (posFinal - posInitial > threshold) {
      shiftSlide(-1, 'drag');
    } else {
      items.style.left = (posInitial) + "px";
    }
    document.onmouseup = null;
    document.onmousemove = null;
  }
  
  function shiftSlide(dir, action) {
    items.classList.add('shifting');
    
    if (allowShift) {
      if (!action) { posInitial = items.offsetLeft; }
      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;      
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;      
      }
    };
    
    allowShift = false;
  }
    
  function checkIndex (){
    items.classList.remove('shifting');
    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }
    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }
    
    allowShift = true;
  }
}
                </script>