@extends('frontend.layout')

@section('frontend_content')

    <section id="heading_page" style="background-image: url('{{ asset('frontend/assets/image/vegetable_page/Breadcrumbs.png') }}');">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('frontend.index') }}">
                    <iconify-icon icon="ic:baseline-home" width="24" height="24"></iconify-icon>
                </a>
                <span>></span>
                <h4>
                    About
                </h4>
            </div>
        </div>
    </section>

    <section id="part1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 title_part">
                        <h4>{{ $about->titleone ?? 'N/A' }}</h4>
                        <p>{{ $about->descriptionone ?? '' }}</p>                    
                    </div>
                    <div class="col-xl-6 img_part">
                        @if(!empty($about->imageone))
                            <img src="{{ asset('storage/About/'.$about->imageone) }}" alt="About Image" width="200">
                        @endif                    
                    </div>
                </div>
            </div>
    </section>

    <section id="part2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 img_part">
                        @if(!empty($about->imageone))
                            <img src="{{ asset('storage/About/'.$about->imagetwo) }}" alt="About Image" width="200">
                        @endif 
                    </div>
                    <div class="col-xl-6 title_part">
                        <h4>{{ $about->titletwo ?? 'N/A' }}</h4>
                        <p>{{ $about->descriptionone ?? '' }}</p>                         
                        <div class="supports">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-4 logo">
                                            <div class="shipping">
                                                <span><svg width="37" height="40" viewBox="0 0 37 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M34.946 0.538949C34.8928 0.343152 34.7602 0.178413 34.5802 0.0846357C34.225 -0.103321 33.7846 0.032269 33.5966 0.387478C33.5961 0.388382 33.5955 0.389287 33.5951 0.390192C33.5951 0.410294 29.9084 7.56272 18.5907 8.80906C17.1144 8.96657 15.6714 9.35173 14.313 9.95088C11.8815 11.008 9.87334 12.8477 8.6079 15.1775C7.42648 17.3659 6.93719 19.8614 7.20475 22.3339C7.40186 24.1363 8.00382 25.8709 8.96572 27.4078C6.95548 28.8511 0.579011 33.8405 0.00408372 39.1958C-0.0381313 39.5954 0.251745 39.9537 0.65138 39.9959C1.05112 40.0381 1.40924 39.7482 1.45145 39.3486C1.97814 34.5682 7.9606 29.9326 9.8261 28.5898C12.0655 31.3398 15.4186 32.8917 19.0169 33.145C21.4387 33.3013 23.8635 32.8883 26.097 31.9389C28.5215 30.9216 30.6628 29.3308 32.3367 27.3032C36.6507 22.0766 38.7052 13.2919 34.946 0.538949ZM10.2442 26.6881C9.96682 26.2512 9.72227 25.7943 9.5125 25.3211C9.07106 24.3228 8.78631 23.2624 8.66821 22.1771C8.42195 19.9995 8.84249 17.7984 9.87435 15.865C10.9896 13.8152 12.7587 12.1975 14.8999 11.2696C16.1241 10.7366 17.4233 10.3962 18.7516 10.2605C26.2216 9.45636 30.616 6.13143 32.8835 3.71914C31.5512 8.10538 29.2575 12.1393 26.1693 15.5273L25.7271 11.0726C25.7046 10.6713 25.361 10.3643 24.9598 10.3868C24.5585 10.4093 24.2515 10.7529 24.274 11.1541C24.2751 11.1739 24.277 11.1937 24.2797 11.2133L24.8466 16.9385C21.4654 20.3679 16.7654 23.8135 10.2442 26.6881ZM31.211 26.3705V26.3745C29.6901 28.2262 27.7418 29.6806 25.5341 30.6121C23.5039 31.4701 21.3003 31.8391 19.1013 31.6896C16.04 31.5345 13.1673 30.1639 11.1207 27.8822C13.5191 26.8209 15.8381 25.5888 18.06 24.1954L24.4486 25.4016C24.8456 25.4638 25.2179 25.1923 25.2801 24.7953C25.3401 24.4123 25.0893 24.0495 24.7099 23.9703L19.8009 23.0415C22.0675 21.4848 24.1775 19.7115 26.101 17.7466C26.1363 17.7162 26.1685 17.6826 26.1975 17.6461C31.2713 12.3632 33.4303 7.13655 34.3309 3.92017C36.8155 14.5181 34.9139 21.8917 31.211 26.3705Z" fill="#00B307" />
                                                </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 info">
                                            <h4>100% Organic food</h4>
                                            <p>100% healthy & Fresh food.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 logo">
                                            <div class="shipping">
                                                <span><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M31.1384 17.3704C30.9781 16.8758 30.5586 16.5221 30.0439 16.4474L23.9436 15.5609L21.2156 10.0337C20.9859 9.56711 20.52 9.27734 19.9999 9.27734C19.4798 9.27734 19.0139 9.56711 18.7843 10.0332L16.056 15.5609L9.95566 16.4474C9.44137 16.5221 9.02199 16.8755 8.86113 17.3702C8.70082 17.8641 8.83215 18.3965 9.20426 18.7598L13.6187 23.0625L12.5766 29.138C12.4886 29.6503 12.695 30.1584 13.1157 30.4641C13.3533 30.637 13.6314 30.7248 13.9114 30.7247C14.1268 30.7247 14.3434 30.6727 14.5435 30.5675L19.9999 27.6989L25.4559 30.5676C25.6496 30.6693 25.8677 30.7231 26.0865 30.7231C26.375 30.7231 26.6505 30.6336 26.8837 30.4641C27.3036 30.1587 27.5104 29.6509 27.4228 29.1384L27.0106 26.7347C26.9515 26.3909 26.6247 26.1599 26.2813 26.2189C25.9375 26.2779 25.7066 26.6045 25.7656 26.9482L26.1778 29.3515C26.1836 29.3862 26.1691 29.422 26.1409 29.4424C26.099 29.473 26.0686 29.4627 26.0434 29.4494L20.2934 26.4264C20.1095 26.3298 19.8898 26.3297 19.7056 26.4264L13.955 29.4495C13.9243 29.4657 13.8861 29.4629 13.8579 29.4424C13.8293 29.4216 13.8151 29.387 13.8211 29.3519L14.9194 22.9488C14.9546 22.7438 14.8868 22.5348 14.7379 22.3898L10.0859 17.8555C10.0607 17.8309 10.0514 17.7936 10.0621 17.7606C10.0729 17.7273 10.1023 17.7024 10.1369 17.6974L16.5659 16.7632C16.7717 16.7333 16.9495 16.6041 17.0415 16.4177L19.9169 10.5918C19.9482 10.5284 20.0509 10.5279 20.0825 10.5921L22.9578 16.4177C23.0497 16.6041 23.2276 16.7333 23.4333 16.7632L29.8624 17.6974C29.8969 17.7025 29.9261 17.727 29.9371 17.7609C29.9479 17.7939 29.9386 17.831 29.9136 17.8553L25.2615 22.3898C25.1127 22.5348 25.0447 22.744 25.08 22.9488L25.427 24.9719C25.4858 25.3156 25.8125 25.5466 26.1561 25.4876C26.5 25.4286 26.7309 25.102 26.6718 24.7583L26.381 23.0625L30.7954 18.7595C31.1678 18.3964 31.2991 17.8639 31.1384 17.3704Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M3.63141 19.3682H0.631562C0.282734 19.3682 0 19.6509 0 19.9997C0 20.3485 0.282734 20.6313 0.631562 20.6313H3.63141C3.98031 20.6313 4.26297 20.3485 4.26297 19.9997C4.26297 19.6509 3.98023 19.3682 3.63141 19.3682Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M39.3682 19.3682H36.3684C36.0195 19.3682 35.7368 19.651 35.7368 19.9997C35.7368 20.3485 36.0195 20.6313 36.3684 20.6313H39.3682C39.7171 20.6313 39.9997 20.3485 39.9997 19.9997C39.9997 19.6509 39.7171 19.3682 39.3682 19.3682Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M7.97907 31.1274L5.8579 33.2485C5.61118 33.495 5.61118 33.895 5.85782 34.1416C5.98118 34.265 6.14282 34.3266 6.30446 34.3266C6.46603 34.3266 6.62774 34.265 6.75095 34.1417L8.87212 32.0205C9.11884 31.7739 9.11884 31.374 8.8722 31.1274C8.62556 30.8807 8.22563 30.8807 7.97907 31.1274Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M33.2487 5.85694L31.1274 7.97804C30.8807 8.22468 30.8807 8.6246 31.1274 8.87124C31.2507 8.9946 31.4123 9.05624 31.574 9.05624C31.7356 9.05624 31.8973 8.9946 32.0205 8.87116L34.1417 6.75007C34.3884 6.50351 34.3884 6.10358 34.1418 5.85694C33.8951 5.61022 33.4952 5.61015 33.2487 5.85694Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M20.0002 35.7373C19.6513 35.7373 19.3687 36.0201 19.3687 36.3689V39.3686C19.3687 39.7175 19.6514 40.0002 20.0002 40.0002C20.3491 40.0002 20.6318 39.7174 20.6318 39.3686V36.3689C20.6318 36.02 20.3491 35.7373 20.0002 35.7373Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M20.0002 4.26297C20.3491 4.26297 20.6318 3.98016 20.6318 3.63141V0.631562C20.6318 0.282734 20.349 0 20.0002 0C19.6513 0 19.3687 0.282812 19.3687 0.631562V3.63141C19.3687 3.98023 19.6513 4.26297 20.0002 4.26297Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M32.0205 31.1274C31.774 30.8807 31.3741 30.8807 31.1274 31.1274C30.8807 31.3739 30.8807 31.7739 31.1274 32.0205L33.2487 34.1417C33.3719 34.265 33.5337 34.3267 33.6952 34.3267C33.8568 34.3267 34.0185 34.265 34.1418 34.1416C34.3884 33.895 34.3884 33.4951 34.1417 33.2485L32.0205 31.1274Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                <path d="M7.979 8.87214C8.10236 8.9955 8.264 9.05714 8.42564 9.05714C8.5872 9.05714 8.74892 8.9955 8.8722 8.87229C9.11884 8.62565 9.11884 8.22573 8.8722 7.97909L6.75103 5.85783C6.50447 5.61119 6.10463 5.61119 5.85783 5.85783C5.61119 6.1044 5.61119 6.50432 5.85783 6.75096L7.979 8.87214Z" fill="#00B307" stroke="#00B307" stroke-width="0.3" />
                                                </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 info">
                                            <h4>Customer Feedback</h4>
                                            <p>Our happy customer</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 logo">
                                            <div class="shipping">
                                                <span><svg width="40" height="28" viewBox="0 0 40 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.7021 19.9389C31.7247 19.9389 30.7962 20.3217 30.0957 21.014C29.3952 21.7145 29.0043 22.6268 29.0043 23.6042C29.0043 24.5816 29.3871 25.4938 30.0957 26.1943C30.8043 26.8866 31.7247 27.2694 32.7021 27.2694C34.7058 27.2694 36.3348 25.6241 36.3348 23.6042C36.3348 21.5842 34.7058 19.9389 32.7021 19.9389ZM32.7021 25.6404C31.5781 25.6404 30.6333 24.7119 30.6333 23.6042C30.6333 22.4964 31.5781 21.5679 32.7021 21.5679C33.8098 21.5679 34.7058 22.4801 34.7058 23.6042C34.7058 24.7282 33.8098 25.6404 32.7021 25.6404ZM33.6469 7.72958C33.5003 7.59112 33.3048 7.51782 33.1012 7.51782H28.9228C28.4749 7.51782 28.1083 7.88434 28.1083 8.33231V15.0112C28.1083 15.4592 28.4749 15.8257 28.9228 15.8257H35.5528C36.0008 15.8257 36.3673 15.4592 36.3673 15.0112V10.5396C36.3673 10.3115 36.2696 10.0916 36.0986 9.93688L33.6469 7.72958ZM34.7383 14.1967H29.7373V9.13867H32.7835L34.7383 10.898V14.1967ZM12.8121 19.9389C11.8347 19.9389 10.9061 20.3217 10.2057 21.014C9.50519 21.7145 9.11423 22.6268 9.11423 23.6042C9.11423 24.5816 9.49705 25.4938 10.2057 26.1943C10.9143 26.8866 11.8347 27.2694 12.8121 27.2694C14.8157 27.2694 16.4447 25.6241 16.4447 23.6042C16.4447 21.5842 14.8157 19.9389 12.8121 19.9389ZM12.8121 25.6404C11.688 25.6404 10.7432 24.7119 10.7432 23.6042C10.7432 22.4964 11.688 21.5679 12.8121 21.5679C13.9198 21.5679 14.8157 22.4801 14.8157 23.6042C14.8157 24.7282 13.9198 25.6404 12.8121 25.6404ZM7.37935 20.9407H5.74221V18.7742C5.74221 18.3262 5.37569 17.9597 4.92771 17.9597C4.47974 17.9597 4.11322 18.3262 4.11322 18.7742V21.7552C4.11322 22.2032 4.47974 22.5697 4.92771 22.5697H7.37935C7.82733 22.5697 8.19385 22.2032 8.19385 21.7552C8.19385 21.3073 7.82733 20.9407 7.37935 20.9407ZM11.5089 16.5017C11.5089 16.0538 11.1423 15.6872 10.6944 15.6872H0.814498C0.366524 15.6872 0 16.0538 0 16.5017C0 16.9497 0.366524 17.3162 0.814498 17.3162H10.6944C11.1423 17.3162 11.5089 16.9578 11.5089 16.5017ZM2.46793 13.5614L12.3478 13.6184C12.7958 13.6184 13.1623 13.26 13.1704 12.8121C13.1786 12.3559 12.8121 11.9894 12.3641 11.9894L2.48422 11.9324C2.47607 11.9324 2.47607 11.9324 2.47607 11.9324C2.0281 11.9324 1.66158 12.2908 1.66158 12.7387C1.65343 13.1949 2.01996 13.5614 2.46793 13.5614ZM4.12951 9.86357H14.0094C14.4573 9.86357 14.8239 9.49705 14.8239 9.04907C14.8239 8.6011 14.4573 8.23457 14.0094 8.23457H4.12951C3.68153 8.23457 3.31501 8.6011 3.31501 9.04907C3.31501 9.49705 3.68153 9.86357 4.12951 9.86357ZM39.6986 8.764L33.8668 3.93402C33.7202 3.81185 33.541 3.74669 33.3456 3.74669H26.4875V0.814498C26.4875 0.366524 26.121 0 25.673 0H4.92771C4.47974 0 4.11322 0.366524 4.11322 0.814498V6.77662C4.11322 7.2246 4.47974 7.59112 4.92771 7.59112C5.37569 7.59112 5.74221 7.2246 5.74221 6.77662V1.629H24.8666V20.9407H18.1877C17.7398 20.9407 17.3732 21.3073 17.3732 21.7552C17.3732 22.2032 17.7398 22.5697 18.1877 22.5697H28.1328C28.5807 22.5697 28.9473 22.2032 28.9473 21.7552C28.9473 21.3073 28.5807 20.9407 28.1328 20.9407H26.4956V5.37569H33.0605L38.371 9.77398L38.314 20.9245H37.4669C37.0189 20.9245 36.6524 21.291 36.6524 21.739C36.6524 22.1869 37.0189 22.5534 37.4669 22.5534H39.1203C39.5683 22.5534 39.9348 22.1951 39.9348 21.7471L40 9.3993C39.9919 9.15495 39.886 8.91875 39.6986 8.764Z" fill="#00B307" />
                                                </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 info">
                                            <h4>Free Shipping</h4>
                                            <p>Free shipping with discount</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-4 logo">
                                            <div class="shipping">
                                                <span><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M30.3165 13.6891V12.305C30.3165 8.99244 29.1443 5.91429 27.0191 3.63025C24.8409 1.28571 21.8459 0 18.5787 0H17.4367C14.1695 0 11.1745 1.28571 8.99636 3.63025C6.87115 5.91429 5.69888 8.99244 5.69888 12.305V13.6891C3.11989 13.863 1.07031 16.0109 1.07031 18.6353V20.7983C1.07031 23.5286 3.29384 25.7521 6.02409 25.7521H8.81485C9.31401 25.7521 9.72241 25.3437 9.72241 24.8445V14.5815C9.72241 14.0824 9.31401 13.674 8.81485 13.674H7.51401V12.305C7.51401 6.32269 11.7796 1.81513 17.4291 1.81513H18.5712C24.2283 1.81513 28.4863 6.32269 28.4863 12.305V13.674H27.1854C26.6863 13.674 26.2779 14.0824 26.2779 14.5815V24.837C26.2779 25.3361 26.6863 25.7445 27.1854 25.7445H28.456C28.0854 30.479 24.8258 31.5756 23.3132 31.8252C22.8972 30.5471 21.6947 29.6244 20.2804 29.6244H18.0115C16.2569 29.6244 14.8275 31.0538 14.8275 32.8084C14.8275 34.563 16.2569 36 18.0115 36H20.288C21.7552 36 22.988 35.0017 23.3585 33.6555C24.0997 33.5496 25.272 33.2849 26.4367 32.6042C28.0779 31.6437 30.0216 29.6849 30.2787 25.737C32.8728 25.5782 34.93 23.4227 34.93 20.7908V18.6277C34.9375 16.0109 32.8955 13.8555 30.3165 13.6891ZM7.92241 23.9294H6.03922C4.30729 23.9294 2.90056 22.5227 2.90056 20.7908V18.6277C2.90056 16.8958 4.30729 15.4891 6.03922 15.4891H7.92241V23.9294ZM20.288 34.1849H18.0115C17.2552 34.1849 16.6426 33.5723 16.6426 32.816C16.6426 32.0597 17.2552 31.4471 18.0115 31.4471H20.288C21.0443 31.4471 21.6569 32.0597 21.6569 32.816C21.6569 33.5723 21.0443 34.1849 20.288 34.1849ZM33.1224 20.7908C33.1224 22.5227 31.7157 23.9294 29.9838 23.9294H28.1006V15.4891H29.9838C31.7157 15.4891 33.1224 16.8958 33.1224 18.6277V20.7908Z" fill="#00B307" />
                                                </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 info">
                                            <h4>Great Support 24/7</h4>
                                            <p>Instant access to Contact</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 logo">
                                            <div class="shipping">
                                                <span><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M32.3819 31.201L30.3103 7.85427C30.273 7.39226 29.8855 7.04202 29.4161 7.04202H25.0493C25.0418 3.15959 21.8822 0 17.9998 0C14.1174 0 10.9578 3.15959 10.9503 7.04202H6.58352C6.12151 7.04202 5.73401 7.39226 5.6893 7.85427L3.61768 31.201C3.61768 31.2308 3.61768 31.2532 3.61768 31.283C3.61768 33.8837 6.00973 36 8.94577 36H27.0538C29.9899 36 32.3819 33.8837 32.3819 31.283C32.3819 31.2532 32.3819 31.2308 32.3819 31.201ZM17.9998 1.78845C20.8986 1.78845 23.2534 4.14324 23.2608 7.04202H12.7388C12.7462 4.14324 15.101 1.78845 17.9998 1.78845ZM27.0538 34.2041H8.94577C7.00828 34.2041 5.42848 32.9149 5.40613 31.3128L7.40323 8.83047H10.9503V11.9677C10.9503 12.4595 11.3527 12.8619 11.8445 12.8619C12.3364 12.8619 12.7388 12.4595 12.7388 11.9677V8.83047H23.2608V11.9677C23.2608 12.4595 23.6632 12.8619 24.155 12.8619C24.6469 12.8619 25.0493 12.4595 25.0493 11.9677V8.83047H28.5964L30.5935 31.3202C30.5711 32.9149 28.9913 34.2041 27.0538 34.2041Z" fill="#00B307" />
                                                <path d="M21.7183 18.6145L16.4424 23.8904L14.2888 21.7369C13.9385 21.3866 13.3722 21.3866 13.022 21.7369C12.6717 22.0871 12.6717 22.6534 13.022 23.0037L15.809 25.7907C15.9803 25.9621 16.2114 26.0515 16.4424 26.0515C16.6734 26.0515 16.8969 25.9621 17.0758 25.7907L22.9851 19.8813C23.3353 19.5311 23.3353 18.9648 22.9851 18.6145C22.6349 18.2717 22.0685 18.2717 21.7183 18.6145Z" fill="#00B307" />
                                                </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 info">
                                            <h4>100% Sucure Payment</h4>
                                            <p>We ensure your money is save</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 logo">
                                            <div class="shipping">
                                                <span><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M34.5561 8.48713C34.5561 8.35036 34.5257 8.21359 34.465 8.08442C34.3434 7.82609 34.1078 7.65133 33.8495 7.59814L18.3721 0.0911777C18.1213 -0.0303926 17.825 -0.0303926 17.5743 0.0911777L1.9449 7.66653C1.64097 7.81089 1.44342 8.11482 1.42822 8.45673V8.46433C1.42822 8.47193 1.42822 8.47953 1.42822 8.49472V27.5053C1.42822 27.8548 1.62577 28.1739 1.9449 28.3259L17.5743 35.9012C17.5819 35.9012 17.5819 35.9012 17.5895 35.9088C17.6123 35.9164 17.6351 35.924 17.6579 35.9392C17.6655 35.9392 17.6731 35.9468 17.6882 35.9468C17.711 35.9544 17.7338 35.962 17.7566 35.9696C17.7642 35.9696 17.7718 35.9772 17.7794 35.9772C17.8022 35.9848 17.8326 35.9848 17.8554 35.9924C17.863 35.9924 17.8706 35.9924 17.8782 35.9924C17.9086 35.9924 17.9466 36 17.977 36C18.0074 36 18.0454 36 18.0758 35.9924C18.0834 35.9924 18.091 35.9924 18.0985 35.9924C18.1213 35.9924 18.1517 35.9848 18.1745 35.9772C18.1821 35.9772 18.1897 35.9696 18.1973 35.9696C18.2201 35.962 18.2429 35.9544 18.2657 35.9468C18.2733 35.9468 18.2809 35.9392 18.2961 35.9392C18.3189 35.9316 18.3417 35.924 18.3645 35.9088C18.3721 35.9088 18.3721 35.9088 18.3797 35.9012L34.0546 28.3031C34.3662 28.1511 34.5713 27.832 34.5713 27.4825V8.50992C34.5561 8.50232 34.5561 8.49472 34.5561 8.48713ZM17.9694 1.92233L31.5245 8.49472L26.5325 10.9185L12.9774 4.34614L17.9694 1.92233ZM17.9694 15.0671L4.41429 8.49472L10.8879 5.35669L24.443 11.9291L17.9694 15.0671ZM3.25178 9.96117L17.0576 16.6551V33.6218L3.25178 26.9278V9.96117ZM18.8812 33.6218V16.6551L25.3624 13.5095V17.9468C25.3624 18.4483 25.7727 18.8586 26.2742 18.8586C26.7756 18.8586 27.1859 18.4483 27.1859 17.9468V12.6205L32.7326 9.93077V26.8974L18.8812 33.6218Z" fill="#00B307" />
                                                </svg></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 info">
                                            <h4>100% Organic Food</h4>
                                            <p>100% healthy & Fresh food.</p>
                                        </div>
                                    </div>
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="part3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 title_part">
                        <h4>{{ $about->titlethree ?? 'N/A' }}</h4>
                        <p>{{ $about->descriptionthree ?? '' }}</p> 
                        <p><span><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4168 3.125L4.68766 8.85417L2.0835 6.25" stroke="#2C742F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>   Sed in metus pellentesque.</p>
                        <p><span><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4168 3.125L4.68766 8.85417L2.0835 6.25" stroke="#2C742F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>   Fusce et ex commodo, aliquam nulla efficitur, tempus lorem.</p>
                        <p><span><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4168 3.125L4.68766 8.85417L2.0835 6.25" stroke="#2C742F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>   Maecenas ut nunc fringilla erat varius.</p>
                        <a href="#">Shop now<span><iconify-icon icon="line-md:arrow-right" width="24" height="24"></iconify-icon></span></a>
                    </div>
                    <div class="col-xl-6 img_part">
                        @if(!empty($about->imageone))
                            <img src="{{ asset('storage/About/'.$about->imagethree) }}" alt="About Image" width="200">
                        @endif 
                    </div>
                </div>
            </div>
    </section>

    <section id="employees">
        <div class="container">
            <div class="header">
                <h4>Our Awesome Team</h4>
                <p>Pellentesque a ante vulputate leo porttitor luctus sed eget eros. Nulla et rhoncus neque. Duis non diam eget est luctus tincidunt a a mi.</p>
            </div>
            <div class="employeesliders">
                @foreach($personnel as $person)
                    <div class="slider">
                        <div class="row">
                                <div class="col-xl-3 info">
                                    @if($person->image)
                                        <img src="{{ asset('storage/personnels/'.$person->image) }}" alt="{{ $person->name }}" >
                                    @else
                                        <img src="{{ asset('assets/img/placeholder/placeholder.png') }}" alt="No Image">
                                    @endif
                                    <div class="social_media">
                                        <span><iconify-icon icon="line-md:facebook" width="24" height="24"></iconify-icon></span>
                                        <span><iconify-icon icon="mdi:twitter" width="24" height="24"></iconify-icon></span>
                                        <span><iconify-icon icon="formkit:pinterest" width="24" height="24"></iconify-icon></span>
                                        <span><iconify-icon icon="hugeicons:instagram" width="24" height="24"></iconify-icon></span>
                                    </div>
                                    <h4>{{ $person->name }}</h4>
                                    <p>{{ $person->designation }}</p>
                                </div>
                        </div>
                    </div>
                 @endforeach
        </div>
    </section>

    <section id="clients">
        <div class="container">
            <div class="header">
                <h4>Client Testimonail</h4>
            </div>
            <div class="clientsliders">
                <div class="slider">
                    <div class="row">
                        <div class="col-xl-4 info">
                            <span><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z" fill="#00B307" />
                            </svg></span>
                            <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                            <div class="row">
                                <div class="col-xl-2 img">
                                    <img src="{{ asset('frontend/assets/image/about/client1.png') }}" alt="">
                                </div>
                                <div class="col-xl-5 customerinfo">
                                    <h4>Robert Fox</h4>
                                    <p>Customer</p>
                                </div>
                                <div class="col-xl-5 stars">
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 info">
                            <span><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z" fill="#00B307" />
                            </svg></span>
                            <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                            <div class="row">
                                <div class="col-xl-2 img">
                                    <img src="{{ asset('frontend/assets/image/about/client2.png') }}" alt="">
                                </div>
                                <div class="col-xl-5 customerinfo">
                                    <h4>Dianne Russell</h4>
                                    <p>Customer</p>
                                </div>
                                <div class="col-xl-5 stars">
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 info">
                            <span><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z" fill="#00B307" />
                            </svg></span>
                            <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                            <div class="row">
                                <div class="col-xl-2 img">
                                    <img src="{{ asset('frontend/assets/image/about/client3.png') }}" alt="">
                                </div>
                                <div class="col-xl-5 customerinfo">
                                    <h4>Eleanor Pena</h4>
                                    <p>Customer</p>
                                </div>
                                <div class="col-xl-5 stars">
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider">
                    <div class="row">
                        <div class="col-xl-4 info">
                            <span><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z" fill="#00B307" />
                            </svg></span>
                            <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                            <div class="row">
                                <div class="col-xl-2 img">
                                    <img src="{{ asset('frontend/assets/image/about/client1.png') }}" alt="">
                                </div>
                                <div class="col-xl-5 customerinfo">
                                    <h4>Robert Fox</h4>
                                    <p>Customer</p>
                                </div>
                                <div class="col-xl-5 stars">
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 info">
                            <span><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z" fill="#00B307" />
                            </svg></span>
                            <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                            <div class="row">
                                <div class="col-xl-2 img">
                                    <img src="{{ asset('frontend/assets/image/about/client2.png') }}" alt="">
                                </div>
                                <div class="col-xl-5 customerinfo">
                                    <h4>Dianne Russell</h4>
                                    <p>Customer</p>
                                </div>
                                <div class="col-xl-5 stars">
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 info">
                            <span><svg width="32" height="26" viewBox="0 0 32 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M23.8222 0C20.4357 0 17.6851 2.65696 17.6851 5.9336C17.6851 9.20821 20.4357 11.8672 23.8222 11.8672C29.6404 11.8672 26.2689 22.171 18.931 23.2443C18.5848 23.2936 18.2688 23.4578 18.0403 23.7071C17.8117 23.9563 17.6857 24.2742 17.6851 24.6032C17.6851 25.4456 18.487 26.1119 19.3751 25.9843C32.7122 24.0847 37.4546 0.00202497 23.8222 0.00202497V0ZM6.13933 0C2.74847 0 0 2.65493 0 5.9336C0 9.20619 2.74847 11.8631 6.13933 11.8631C11.9553 11.8631 8.58385 22.171 1.24597 23.2443C0.900119 23.2936 0.58443 23.4575 0.355931 23.7063C0.127431 23.9551 0.00118682 24.2725 0 24.6011C0 25.4436 0.801907 26.1098 1.68788 25.9823C15.0293 24.0827 19.7717 0 6.13933 0Z" fill="#00B307" />
                            </svg></span>
                            <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                            <div class="row">
                                <div class="col-xl-2 img">
                                    <img src="{{ asset('frontend/assets/image/about/client3.png') }}" alt="">
                                </div>
                                <div class="col-xl-5 customerinfo">
                                    <h4>Eleanor Pena</h4>
                                    <p>Customer</p>
                                </div>
                                <div class="col-xl-5 stars">
                                    <div class="icons">
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                        <span><iconify-icon icon="material-symbols:star-rounded" width="16" height="16"></iconify-icon></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="logo">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 logos">
                    <span><svg width="82" height="32" viewBox="0 0 82 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00036 8.70355C8.61529 8.1764 9.40674 7.91258 10.1099 7.91258C11.429 7.91258 12.7476 8.52799 14.0662 9.58278L14.6816 10.1104L16.4396 7.64877L15.9998 7.20891C14.3296 5.80253 12.5716 5.09886 10.5493 5.09886C9.05467 5.09886 7.64828 5.62649 6.2419 6.50572C4.83552 7.47273 3.95629 8.70307 3.69247 10.1977C3.34088 11.7801 3.69247 13.1865 4.83552 14.2413C5.53871 14.945 6.68176 15.5604 8.35196 16.2631C9.58278 16.7907 10.3738 17.2301 10.7253 17.5822C11.1652 18.1098 11.3408 18.812 11.1652 19.6918C10.9892 20.5705 10.5498 21.2742 9.75834 21.7136C9.05515 22.2412 8.2637 22.4172 7.47273 22.4172C5.62649 22.4172 4.04455 21.6258 2.63721 19.8673L2.19783 19.2529L0 21.6258L0.439854 22.0651C1.14305 22.9449 2.10957 23.6485 3.3404 24.263C4.65948 24.8784 5.88983 25.2309 7.12065 25.2309C8.70307 25.2309 10.1095 24.7906 11.4281 23.8236C12.9222 22.8566 13.8897 21.5375 14.1535 19.8673C14.5929 18.1098 14.1535 16.7025 13.0105 15.5604C12.3951 14.945 11.1642 14.2413 9.40578 13.5381H9.318C7.29621 12.6589 6.41698 11.6919 6.59254 10.6371C6.76954 9.84612 7.20939 9.14293 8.00036 8.70355ZM26.198 0H23.2092L21.9783 5.53823H17.9347L17.3193 8.2637H21.3634L19.1656 18.7252C18.6379 21.0981 18.814 22.8566 19.781 23.9114C20.3964 24.7901 21.5394 25.2305 23.0341 25.2305C25.7591 25.2305 28.1329 23.7353 30.2425 20.7465L30.8579 19.8668L27.8691 19.1641L27.6053 19.6035C26.2862 21.4493 24.8803 22.4167 23.3857 22.4167C22.7703 22.4167 22.3304 22.3285 22.0666 21.9774C21.8028 21.6253 21.715 20.9216 21.9783 19.9546L24.44 8.26274H30.9457L31.5611 5.53727H24.9671L26.198 0ZM46.5934 7.03335C45.5386 5.71427 44.1313 5.09886 42.286 5.09886C39.6483 5.09886 37.3627 6.24142 35.5164 8.35196C33.934 10.1982 32.8792 12.4838 32.3516 15.121C31.4724 18.6374 31.9117 21.2747 33.4064 23.2082C34.549 24.5273 36.1319 25.2309 38.2414 25.2309C40.0877 25.2309 42.4606 24.7024 45.186 23.5607L45.8015 23.2964L45.0978 20.3081L44.3073 20.7475C42.1977 21.8905 40.2632 22.4177 38.593 22.4177C37.3622 22.4177 36.4834 22.0656 35.9558 21.4497C35.0766 20.4827 34.8128 18.7252 35.1644 16.1753H47.3839L47.5599 15.5604C48.3509 11.6924 47.9993 8.79133 46.5934 7.03335ZM41.8452 7.9121C42.8131 7.9121 43.6036 8.2637 44.219 9.05515C45.0105 10.1104 45.2738 11.5168 44.9227 13.3626H35.7798C36.2196 11.8679 37.0106 10.6371 38.0659 9.5823C39.2967 8.52751 40.527 7.9121 41.8452 7.9121ZM59.2518 5.09886C57.4943 5.09886 55.9109 5.71427 54.5928 6.94509V5.01156L51.6035 5.45093V6.1546C51.7795 7.91258 51.6035 10.0226 51.0759 12.3082L46.8562 32H49.9338L51.603 24.2635C52.6974 24.9006 53.9418 25.2347 55.2082 25.2314C57.054 25.2314 58.9002 24.44 60.5709 23.0336C62.7687 21.1869 64.1751 18.7262 64.8783 15.4731C65.6688 11.8689 65.3177 9.14389 63.7352 7.20939C62.5927 5.80253 61.0985 5.09886 59.2518 5.09886ZM54.329 11.0769C55.8241 8.96737 57.3182 7.9121 58.9007 7.9121C59.8677 7.9121 60.6591 8.35196 61.2736 9.05515C62.3284 10.286 62.4166 12.3078 61.889 15.0328C61.2736 18.1098 60.0432 20.2194 58.1087 21.4497C57.1417 22.0651 56.0869 22.4177 55.0322 22.4177C54.0652 22.4177 53.0986 21.9783 52.2189 21.0986L54.329 11.0769ZM74.5488 13.5386C72.4393 12.6594 71.4713 11.6924 71.7356 10.6376C71.9116 9.8466 72.351 9.14341 73.0537 8.70355C73.7574 8.1764 74.4611 7.91258 75.2515 7.91258C76.5706 7.91258 77.8888 8.52799 79.2078 9.58278L79.8232 10.1104L81.5817 7.64877L81.1423 7.20891C79.4721 5.80253 77.6254 5.09886 75.6919 5.09886C74.1968 5.09886 72.7904 5.62649 71.3835 6.50572C69.9771 7.47273 69.0984 8.70307 68.8346 10.1977C68.4835 11.7801 68.8346 13.1865 70.0654 14.2413C70.6808 14.8567 71.8239 15.5604 73.4941 16.2631L75.867 17.5822C76.3063 18.1098 76.4824 18.812 76.3063 19.6918C76.1313 20.5705 75.6036 21.2742 74.9 21.7136C74.1963 22.2412 73.4058 22.4172 72.6139 22.4172C70.7681 22.4172 69.1862 21.6258 67.8671 19.8673L67.3394 19.2529L65.2299 21.6258L65.581 22.0651C66.2847 22.9449 67.2512 23.6485 68.4825 24.263C69.7133 24.8784 71.0314 25.2309 72.2627 25.2309C73.8452 25.2309 75.2511 24.7906 76.5702 23.8236C78.0643 22.8566 79.0313 21.5375 79.2956 19.8673C79.735 18.1098 79.2956 16.7025 78.2408 15.5604C77.5372 14.9455 76.3063 14.2418 74.5488 13.5386Z" fill="#D8259B" />
                    </svg></span>
                </div>
                <div class="col-xl-2 logos">
                    <span><svg width="67" height="32" viewBox="0 0 67 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.44813 4.43062H5.65404C5.27729 4.17376 4.56803 3.84668 3.40054 3.84668C2.55548 3.84668 1.92265 4.08258 1.44813 4.43062ZM6.36019 4.43062H10.7593C10.241 4.08258 9.5154 3.84668 8.50195 3.84668C7.43184 3.84668 6.73927 4.17376 6.36019 4.43062ZM0.854492 5.01456H11.3879C11.211 4.78747 10.9988 4.5903 10.7593 4.43062H6.36019C6.11537 4.59629 6.00129 4.73248 6.00129 4.73248C6.00129 4.73248 5.89653 4.59629 5.65404 4.43062H1.44813C1.22378 4.59638 1.02393 4.79296 0.854492 5.01456Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.502441 5.57841H11.73C11.6381 5.37795 11.5234 5.18878 11.3881 5.01465H0.854356C0.714676 5.19623 0.598665 5.38751 0.502441 5.57841Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.262347 6.16206H11.9345C11.8843 5.96153 11.8157 5.76606 11.7296 5.57812H0.502518C0.402414 5.77678 0.324038 5.97505 0.262347 6.16206ZM0.109863 6.74639H2.79637C2.96941 6.54541 3.25459 6.36382 3.72058 6.36382C4.18695 6.36382 4.45234 6.54579 4.60289 6.74639H7.58039C7.75615 6.54541 8.04638 6.36382 8.52129 6.36382C8.96981 6.36382 9.23714 6.54579 9.39622 6.74639H12.0331C12.0152 6.54949 11.9821 6.35426 11.9341 6.16245H0.262347C0.199581 6.35378 0.148657 6.5488 0.109863 6.74639Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0397383 7.30986H2.54039V7.2695C2.54039 7.2695 2.58307 6.99364 2.79647 6.74609H0.109966C0.0486622 7.06076 0.0397383 7.2695 0.0397383 7.2695V7.30986ZM4.80126 7.30986H7.32208V7.2695C7.32208 7.2695 7.36515 6.99364 7.58127 6.74609H4.60377C4.71631 6.89921 4.78475 7.08023 4.80165 7.2695V7.30986H4.80126ZM9.62214 7.30986H12.0429V7.2695C12.0429 7.2695 12.0623 7.06037 12.0336 6.74609H9.39671C9.59149 6.99364 9.62214 7.2695 9.62214 7.2695V7.30986ZM0.0385742 7.89379H2.54039V7.30986H0.0397383L0.0385742 7.89379ZM4.80126 7.89379H7.32208V7.30986H4.80126V7.89379ZM9.62214 7.89379H12.0429V7.30986H9.62214V7.89379Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0371964 8.47847H2.54056V7.89453H0.0387487L0.0371964 8.47847ZM4.80104 8.47847H7.32187V7.89453H4.80104V8.47847ZM9.62193 8.47847H12.0426V7.89453H9.62193V8.47847ZM0.0356445 9.04223H2.54018V8.47847H0.0368086L0.0356445 9.04223ZM4.80104 9.04223H7.32187V8.47847H4.80104V9.04223ZM9.62193 9.04223H12.0426V8.47847H9.62193V9.04223Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0348555 9.62593H2.54055V9.04199H0.0356314L0.0348555 9.62593ZM4.80103 9.62593H7.32186V9.04199H4.80103V9.62593ZM9.62191 9.62593H12.0426V9.04199H9.62191V9.62593ZM0.0336914 10.1897H2.54055V9.62593H0.0348555L0.0336914 10.1897ZM4.80103 10.1897H7.32186V9.62593H4.80103V10.1897ZM9.62191 10.1897H12.0426V9.62593H9.62191V10.1897Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0324141 10.7748H2.54044V10.1904H0.0335782L0.0324141 10.7748ZM4.8013 10.7748H7.32213V10.1904H4.8013V10.7748ZM9.62219 10.7748H12.0429V10.1904H9.62219V10.7748ZM0.03125 11.3587H2.54082V10.7748H0.0328019L0.03125 11.3587ZM4.8013 11.3587H7.32213V10.7748H4.8013V11.3587ZM9.62219 11.3587H12.0429V10.7748H9.62219V11.3587Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0297852 11.9222H2.54052V11.3584H0.0309493L0.0297852 11.9222ZM4.801 11.9222H7.32183V11.3584H4.801V11.9222ZM9.62189 11.9222H12.0426V11.3584H9.62189V11.9222Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0288086 12.5062H2.54071V11.9219H0.0299723L0.0288086 12.5062ZM4.80119 12.5062H7.32202V11.9219H4.80119V12.5062ZM9.62207 12.5062H12.0428V11.9219H9.62207V12.5062Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0273438 13.0898H2.5408V12.5059H0.028896L0.0273438 13.0898ZM4.80128 13.0898H7.32211V12.5059H4.80128V13.0898ZM9.62216 13.0898H12.0429V12.5059H9.62216V13.0898Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0265413 13.6536H2.54077V13.0898H0.0273172L0.0265413 13.6536ZM4.80125 13.6536H7.32208V13.0898H4.80125V13.6536ZM9.62214 13.6536H12.0429V13.0898H9.62214V13.6536ZM0.0249894 14.2375H2.54038V13.6536H0.0261535L0.0249894 14.2375ZM4.80125 14.2375H7.32208V13.6536H4.80125V14.2375ZM9.62214 14.2375H12.0429V13.6536H9.62214V14.2375ZM0.0234375 14.8219H2.54038V14.2379H0.0249894L0.0234375 14.8219ZM4.80125 14.8219H7.32208V14.2379H4.80125V14.8219ZM9.62214 14.8219H12.0429V14.2379H9.62214V14.8219Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0221602 15.386H2.54027V14.8223H0.0233243L0.0221602 15.386ZM4.80114 15.386H7.32197V14.8223H4.80114V15.386ZM9.62202 15.386H12.0427V14.8223H9.62202V15.386ZM0.0209961 15.97H2.54027V15.386H0.0221602L0.0209961 15.97ZM4.80114 15.97H7.32197V15.386H4.80114V15.97ZM9.62202 15.97H12.0427V15.386H9.62202V15.97Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0195312 16.5537H2.54036V15.9697H0.0210835L0.0195312 16.5537ZM4.80084 16.5537H7.32166V15.9697H4.80084V16.5537ZM9.62172 16.5537H12.0424V15.9697H9.62172V16.5537Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0187422 17.1175H2.54073V16.5537H0.0199059L0.0187422 17.1175ZM4.80121 17.1175H7.32204V16.5537H4.80121V17.1175ZM9.6221 17.1175H12.0428V16.5537H9.6221V17.1175ZM0.0175781 17.7018H2.54073V17.1175H0.0187422L0.0175781 17.7018ZM4.80121 17.7018H7.32204V17.1175H4.80121V17.7018ZM9.6221 17.7018H12.0428V17.1175H9.6221V17.7018Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0160001 18.2649H2.54032V17.7012H0.0171638L0.0160001 18.2649ZM4.80119 18.2649H7.32201V17.7012H4.80119V18.2649ZM9.62207 18.2649H12.0428V17.7012H9.62207V18.2649ZM0.014836 18.8493H2.54071V18.2649H0.0163879L0.014836 18.8493ZM4.80119 18.8493H7.32201V18.2649H4.80119V18.8493ZM9.62207 18.8493H12.0428V18.2649H9.62207V18.8493ZM0.0136719 19.4328H2.54071V18.8493H0.014836L0.0136719 19.4328ZM4.80119 19.4328H7.32201V18.8493H4.80119V19.4328ZM9.62207 19.4328H12.0428V18.8493H9.62207V19.4328Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0119063 19.9981H2.54049V19.4336H0.0134582L0.0119063 19.9981ZM4.80097 19.9981H7.3218V19.4336H4.80097V19.9981ZM9.62186 19.9981H12.0426V19.4336H9.62186V19.9981ZM0.0107422 20.5817H2.54011V19.9981H0.0115181L0.0107422 20.5817ZM4.80097 20.5817H7.3218V19.9981H4.80097V20.5817ZM9.62186 20.5817H12.0426V19.9981H9.62186V20.5817Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00985266 21.1654H2.54038V20.5811H0.0110168L0.00985266 21.1654ZM4.80125 21.1654H7.32207V20.5811H4.80125V21.1654ZM9.62213 21.1654H12.0429V20.5811H9.62213V21.1654ZM0.00830078 21.7295H2.54038V21.1658H0.00985266L0.00830078 21.7295ZM4.80125 21.7295H7.32207V21.1658H4.80125V21.7295ZM9.62213 21.7295H12.0429V21.1658H9.62213V21.7295Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00732422 22.3138H2.54057V21.7295H0.00848832L0.00732422 22.3138ZM4.80105 22.3138H7.32187V21.7295H4.80105V22.3138ZM9.62193 22.3138H12.0427V21.7295H9.62193V22.3138Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00555863 22.897H2.53997V22.3135H0.00672235L0.00555863 22.897ZM4.80083 22.897H7.32166V22.3135H4.80083V22.897ZM9.62171 22.897H12.0424V22.3135H9.62171V22.897ZM0.00439453 23.4608H2.53997V22.897H0.00555863L0.00439453 23.4608ZM4.80083 23.4608H7.32166V22.897H4.80083V23.4608ZM9.62171 23.4608H12.0424V22.897H9.62171V23.4608Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00330439 24.0453H2.54004V23.4609H0.00446848L0.00330439 24.0453ZM4.80091 24.0453H7.32173V23.4609H4.80091V24.0453ZM9.62179 24.0453H12.0425V23.4609H9.62179V24.0453ZM0.00252844 24.6296H2.54043V24.0453H0.00369254L0.00252844 24.6296ZM4.80091 24.6296H7.32173V24.0453H4.80091V24.6296ZM9.62179 24.6296H12.0425V24.0453H9.62179V24.6296ZM0.000976562 25.1933H2.54043V24.6296H0.00252844L0.000976562 25.1933ZM4.80091 25.1933H7.32173V24.6296H4.80091V25.1933ZM9.62179 25.1933H12.0425V24.6296H9.62179V25.1933Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25.7769H2.54062V25.1934H0.0011641L0 25.7769ZM4.8011 25.7769H7.32192V25.1934H4.8011V25.7769ZM9.62198 25.7769H12.0427V25.1934H9.62198V25.7769Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 3.60445H30.9982L30.668 3.02051V3.60445ZM30.668 4.20856H31.3404L30.9982 3.60445H30.668V4.20856Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 4.8131H31.6822L31.3404 4.20898H30.668V4.8131ZM35.5692 4.8131H37.9298V4.22916H35.5692V4.8131Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 5.41798H32.0244L31.6822 4.81348H30.668V5.41798ZM35.5692 5.41798H37.9298V4.81348H35.5692V5.41798Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 6.00191H32.3546L32.0244 5.41797H30.668V6.00191ZM35.5692 6.00191H37.9298V5.41797H35.5692V6.00191Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 6.60607H32.6968L32.3546 6.00195H30.668V6.60607ZM35.5692 6.60607H37.9298V6.00195H35.5692V6.60607ZM30.668 7.21018H33.0386L32.6968 6.60607H30.668V7.21018ZM35.5692 7.21018H37.9298V6.60607H35.5692V7.21018Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.6679 7.81369H33.3808L33.0385 7.20996H30.6679V7.81369ZM35.5691 7.81369H37.9297V7.20996H35.5691V7.81369ZM30.6679 8.39801H33.7109L33.3804 7.81369H30.6675V8.39801H30.6679ZM35.5691 8.39801H37.9297V7.81369H35.5691V8.39801Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 9.00255H34.0529L33.711 8.39844H30.668V9.00255ZM35.5692 9.00255H37.9298V8.39844H35.5692V9.00255ZM30.668 9.60666H34.3955L34.0529 9.00255H30.668V9.60666ZM35.5692 9.60666H37.9298V9.00255H35.5692V9.60666Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 10.21H34.7373L34.3955 9.60547H30.668V10.21ZM35.5692 10.21H37.9298V9.60547H35.5692V10.21Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 10.7939H35.0675L34.7369 10.21H30.668V10.7939ZM35.5692 10.7939H37.9298V10.21H35.5692V10.7939ZM30.668 11.398H35.4093L35.0675 10.7939H30.668V11.398ZM35.5692 11.398H37.9298V10.7939H35.5692V11.398Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 12.0026H37.9298V11.3984H35.5692V11.6809L35.4093 11.3984H30.668V12.0026ZM30.668 12.6067H32.9882V12.0631L33.3382 12.6067H37.9298V12.0026H30.668V12.6067Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 13.1904H32.9882V12.6064H30.668V13.1904ZM33.7134 13.1904H37.9298V12.6064H33.3382L33.7134 13.1904Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 13.7945H32.9882V13.1904H30.668V13.7945ZM34.1021 13.7945H37.9298V13.1904H33.7134L34.1021 13.7945Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 14.399H32.9882V13.7949H30.668V14.399ZM34.4909 14.399H37.9298V13.7949H34.1021L34.4909 14.399Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 14.9828H32.9882V14.3984H30.668V14.9828ZM34.8661 14.9828H37.9298V14.3984H34.4909L34.8661 14.9828Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 15.5875H32.9882V14.9834H30.668V15.5875ZM35.2545 15.5875H37.9298V14.9834H34.8661L35.2545 15.5875Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 16.191H32.9882V15.5869H30.668V16.191ZM35.6433 16.191H37.9298V15.5869H35.2545L35.6433 16.191ZM30.668 16.7951H32.9882V16.191H30.668V16.7951ZM35.6693 16.7951H37.9298V16.191H35.6433L35.6689 16.2314V16.7951H35.6693ZM30.668 17.3795H32.9882V16.7951H30.668V17.3795ZM35.6693 17.3795H37.9298V16.7951H35.6693V17.3795Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 17.983H32.9882V17.3789H30.668V17.983ZM35.6693 17.983H37.9298V17.3789H35.6693V17.983ZM30.668 18.5871H32.9882V17.983H30.668V18.5871ZM35.6693 18.5871H37.9298V17.983H35.6693V18.5871Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 19.1918H32.9882V18.5869H30.668V19.1918ZM35.6693 19.1918H37.9298V18.5869H35.6693V19.1918Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 19.7759H32.9882V19.1924H30.668V19.7759ZM35.6693 19.7759H37.9298V19.1924H35.6693V19.7759ZM30.668 20.3808H32.9882V19.7759H30.668V20.3808ZM35.6693 20.3808H37.9298V19.7759H35.6693V20.3808Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 20.985H32.9882V20.3809H30.668V20.985ZM35.6693 20.985H37.9298V20.3809H35.6693V20.985Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 21.5885H32.9882V20.9844H30.668V21.5885ZM35.6693 21.5885H37.9298V20.9844H35.6693V21.5885ZM30.668 22.1728H32.9882V21.5885H30.668V22.1728ZM35.6693 22.1728H37.9298V21.5885H35.6693V22.1728Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 22.777H32.9882V22.1729H30.668V22.777ZM35.6693 22.777H37.9298V22.1729H35.6693V22.777Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 23.3805H32.9882V22.7764H30.668V23.3805ZM35.6693 23.3805H37.9298V22.7764H35.6693V23.3805Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 23.985H32.9882V23.3809H30.668V23.985ZM35.6693 23.985H37.9298V23.3809H35.6693V23.985Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 24.5687H32.9882V23.9844H30.668V24.5687ZM35.6693 24.5687H37.9298V23.9844H35.6693V24.5687ZM30.668 25.1728H32.9882V24.5687H30.668V25.1728ZM35.6693 25.1728H37.9298V24.5687H35.6693V25.1728Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.668 25.777H32.9882V25.1729H30.668V25.777ZM35.6693 25.777H37.9298V25.1729H35.6693V25.777Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M51.9004 0.846225H53.7531V0C53.7531 0 53.0074 0.255303 51.9004 0.846225Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.4683 1.69213H53.7534V0.84668H51.9008C51.4113 1.10775 50.9334 1.38983 50.4683 1.69213Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M49.2942 2.51707H53.7531V1.69141H50.4679C50.0668 1.95226 49.6753 2.22767 49.2942 2.51707ZM48.259 3.3629H53.7531V2.51707H49.2942C48.9394 2.78691 48.5942 3.06902 48.259 3.3629ZM47.3589 4.20874H52.8623C53.4086 3.95227 53.7535 3.84635 53.7535 3.84635V3.3629H48.2594C47.9496 3.6344 47.6492 3.91651 47.3589 4.20874Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.5715 5.05423H51.3602C51.8399 4.73651 52.3418 4.45371 52.8621 4.20801H47.3588C47.0872 4.48142 46.8246 4.76364 46.5715 5.05423ZM45.8828 5.90007H50.2249C50.587 5.597 50.9661 5.31473 51.3602 5.05462H46.5715C46.3328 5.32888 46.1031 5.61085 45.8828 5.90007Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M45.278 6.74623H49.3117C49.6014 6.4488 49.9063 6.16648 50.225 5.90039H45.8829C45.6723 6.17579 45.4706 6.45788 45.278 6.74623ZM44.7612 7.57189H48.5784C48.8101 7.28553 49.0549 7.01002 49.3121 6.74623H45.2784C45.1 7.01201 44.9281 7.2871 44.7612 7.57189Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.2998 8.4181H47.9517C48.1482 8.1272 48.3573 7.84499 48.5783 7.57227H44.7612C44.5992 7.84967 44.4454 8.13173 44.2998 8.4181ZM43.9014 9.26433H47.4322C47.599 8.9679 47.7724 8.68621 47.9521 8.41849H44.3002C44.1606 8.69242 44.0271 8.9741 43.9014 9.26433Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.5601 10.1095H47.0012C47.1339 9.82225 47.2775 9.5401 47.4315 9.26367H43.9007C43.7795 9.54245 43.6659 9.8245 43.5601 10.1095Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.2731 10.9552H46.6491C46.7581 10.6627 46.8757 10.3802 47.0006 10.1094H43.5595C43.4582 10.3849 43.3628 10.6669 43.2731 10.9552ZM43.0415 11.7809H46.3698C46.4563 11.4965 46.5494 11.2214 46.6495 10.9552H43.2735C43.1889 11.2283 43.1116 11.5037 43.0415 11.7809Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.8485 12.6261H46.1465C46.214 12.3355 46.2881 12.0534 46.37 11.7803H43.0417C42.9702 12.0605 42.9058 12.3426 42.8485 12.6261ZM42.7007 13.4719H45.9766C46.0258 13.1817 46.0825 12.9 46.1465 12.6261H42.8485C42.793 12.9028 42.7438 13.1848 42.7007 13.4719Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.5945 14.3175H45.8576C45.8902 14.0281 45.9306 13.746 45.9767 13.4717H42.7009C42.6589 13.7528 42.6234 14.0348 42.5945 14.3175ZM42.5243 15.1634H45.7851C45.8025 14.8747 45.8266 14.5926 45.858 14.3175H42.5949C42.5652 14.5989 42.5417 14.8809 42.5243 15.1634ZM42.4956 15.989H45.7548C45.7587 15.7081 45.7684 15.4326 45.7851 15.1637H42.5243C42.5092 15.4386 42.4996 15.7138 42.4956 15.989Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.4973 16.8351H45.7635C45.7555 16.6338 45.7515 16.4324 45.7515 16.231C45.7515 16.1499 45.753 16.07 45.7546 15.9893H42.4954C42.4938 16.1029 42.4907 16.2166 42.4907 16.3319C42.4907 16.5018 42.4938 16.6694 42.4973 16.8351ZM50.4924 16.8351H53.7532V16.3319H50.4924V16.8351Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.5411 17.6816H45.8232C45.7956 17.4 45.7759 17.1177 45.7642 16.835H42.498C42.5062 17.1221 42.5206 17.4042 42.5411 17.6816ZM50.4928 17.6816H53.7535V16.835H50.4928V17.6816Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.6198 18.5285H45.9329C45.8876 18.2477 45.8509 17.9656 45.8231 17.6826H42.541C42.5612 17.969 42.5872 18.2518 42.6198 18.5285ZM50.4927 18.5285H53.7534V17.6826H50.4927V18.5285Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.7446 19.3732H46.0965C46.0331 19.093 45.9785 18.8109 45.9327 18.5273H42.6196C42.6545 18.8149 42.6968 19.0965 42.7446 19.3732ZM50.4925 19.3732H53.7533V18.5273H50.4925V19.3732Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.9138 20.2189H46.3193C46.2357 19.9395 46.1614 19.6574 46.0965 19.373H42.7446C42.7947 19.6609 42.8509 19.943 42.9138 20.2189ZM50.4926 20.2189H53.7533V19.373H50.4926V20.2189Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.124 21.044H46.5969C46.495 20.7722 46.4025 20.497 46.3195 20.2188H42.9141C42.9777 20.5 43.0471 20.7751 43.124 21.044ZM50.4928 21.044H53.7536V20.2188H50.4928V21.044ZM43.3897 21.8906H46.9492C46.8219 21.6127 46.7044 21.3303 46.5969 21.044H43.124C43.2058 21.3327 43.2943 21.6155 43.3897 21.8906ZM50.4928 21.8906H53.7536V21.044H50.4928V21.8906Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.7116 22.7365H47.377C47.2237 22.46 47.0808 22.1778 46.9487 21.8906H43.3892C43.4904 22.1797 43.5979 22.4614 43.7116 22.7365ZM50.4926 22.7365H53.7534V21.8906H50.4926V22.7365Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.0945 23.5822H47.891C47.7089 23.307 47.5375 23.0248 47.3773 22.7363H43.7119C43.8322 23.0258 43.9602 23.3079 44.0945 23.5822ZM50.4926 23.5822H53.7533V22.7363H50.4926V23.5822Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5425 24.4279H48.5051C48.2886 24.1548 48.0838 23.8726 47.8913 23.582H44.0947C44.2371 23.873 44.3873 24.1543 44.5425 24.4279ZM50.4928 24.4279H53.7536V23.582H50.4928V24.4279Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M45.0483 25.253H49.2209C48.9698 24.9889 48.7308 24.7135 48.5046 24.4277H44.542C44.7016 24.7083 44.8705 24.9836 45.0483 25.253ZM50.4923 25.253H53.7531V24.4277H50.4923V25.253Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M45.6467 26.0995H50.1254C49.8075 25.8356 49.5056 25.5529 49.2214 25.2529H45.0488C45.2387 25.5417 45.4381 25.824 45.6467 26.0995ZM50.4928 26.0995H53.7536V25.2529H50.4928V26.0995Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.3336 26.9454H53.7533V26.0996H50.4926V26.3817C50.4926 26.3817 50.3549 26.2886 50.1252 26.0996H45.6465C45.8659 26.3892 46.0951 26.6713 46.3336 26.9454Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M47.1239 27.7911H53.7532V26.9453H46.3335C46.5919 27.2425 46.8565 27.5234 47.1239 27.7911Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M48.0358 28.6369H53.7534V27.791H47.124C47.4179 28.0837 47.722 28.3658 48.0358 28.6369Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M49.0923 29.4826H53.7537V28.6367H48.0361C48.3774 28.9319 48.7297 29.214 49.0923 29.4826ZM50.3001 30.3086H53.7533V29.4826H49.0919C49.484 29.7732 49.887 30.0487 50.3001 30.3086ZM51.79 31.1544H53.7537V30.3086H50.3005C50.8359 30.6442 51.3403 30.9255 51.79 31.1544Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M53.7532 32.0001V31.1543H51.7896C52.9582 31.7495 53.7532 32.0001 53.7532 32.0001Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 17.1575H61.6753V16.9961H59.2949V17.1575ZM64.4565 17.1575H66.9369V16.9961H64.4565V17.1575ZM59.2949 17.7411H61.6753V17.1575H59.2949V17.7411ZM64.4565 17.7411H66.9369V17.1575H64.4565V17.7411Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 18.3265H61.6753V17.7422H59.2949V18.3265ZM64.4565 18.3265H66.9369V17.7422H64.4565V18.3265Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 18.9097H61.6753V18.3262H59.2949V18.9097ZM64.4565 18.9097H66.9369V18.3262H64.4565V18.9097ZM59.2949 19.494H61.6753V18.9097H59.2949V19.494ZM64.4565 19.494H66.9369V18.9097H64.4565V19.494Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 20.0785H61.6753V19.4941H59.2949V20.0785ZM64.4565 20.0785H66.9369V19.4941H64.4565V20.0785ZM59.2949 20.6628H61.6753V20.0785H59.2949V20.6628ZM64.4565 20.6628H66.9369V20.0785H64.4565V20.6628Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 21.2457H61.6753V20.6621H59.2949V21.2457ZM64.4565 21.2457H66.9369V20.6621H64.4565V21.2457ZM59.2949 21.8498H61.6753V21.2457H59.2949V21.8498ZM64.4565 21.8498H66.9369V21.2457H64.4565V21.8498ZM59.2949 22.4341H61.6753V21.8498H59.2949V22.4341ZM64.4565 22.4341H66.9369V21.8498H64.4565V22.4341Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.3535 23.0179H61.9361C61.7246 22.7238 61.6753 22.4336 61.6753 22.4336H59.295C59.295 22.4336 59.2915 22.6691 59.3535 23.0179ZM64.3506 23.0179H66.8955C66.9242 22.8239 66.9343 22.6648 66.937 22.5624V22.4336H64.4565C64.4565 22.4336 64.4852 22.7238 64.3506 23.0179ZM59.5037 23.6015H62.9274C62.4249 23.5293 62.1196 23.2724 61.9361 23.0179H59.3535C59.3846 23.1898 59.4315 23.3892 59.5037 23.6015ZM63.504 23.6015H66.7624C66.8283 23.3892 66.8691 23.1898 66.8951 23.0179H64.3502C64.2338 23.2724 63.9936 23.5293 63.504 23.6015Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.7577 24.1869H66.5271C66.6287 23.989 66.7052 23.7907 66.7626 23.6025H63.5042C63.313 23.6304 63.1188 23.6304 62.9276 23.6025H59.5039C59.5675 23.7903 59.6498 23.989 59.7577 24.1869Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M60.164 24.7709H66.14C66.2906 24.5912 66.4205 24.3952 66.5272 24.1865H59.7578C59.8713 24.3957 60.0075 24.5916 60.164 24.7709ZM60.8489 25.3544H65.4746C65.7244 25.1944 65.9487 24.9976 66.14 24.7709H60.164C60.3626 24.9978 60.5933 25.1944 60.8489 25.3544Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M65.4744 25.3535H60.8486C61.4035 25.7019 62.155 25.9378 63.1758 25.9378C64.1916 25.9378 64.9335 25.7023 65.4744 25.3535Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M60.8365 4.26948H65.413C64.8589 3.92029 64.1042 3.68555 63.076 3.68555C62.0983 3.68516 61.3739 3.92029 60.8365 4.26948ZM60.1719 4.85342H66.0943C65.8974 4.6261 65.6677 4.4293 65.413 4.26948H60.8365C60.5877 4.43066 60.3637 4.6274 60.1719 4.85342Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.7742 5.43745H66.4928C66.3818 5.22875 66.2482 5.03292 66.0943 4.85352H60.1719C60.0189 5.03345 59.8856 5.2292 59.7742 5.43745ZM59.5208 6.02139H66.7396C66.6746 5.81983 66.5919 5.62442 66.4924 5.43745H59.7738C59.6737 5.62487 59.5891 5.82017 59.5208 6.02139ZM59.3672 6.60572H61.8923C62.0781 6.33373 62.4203 6.08192 63.0555 6.08192C63.7011 6.08192 64.0492 6.33334 64.2362 6.60572H66.8831C66.8501 6.40775 66.8023 6.21255 66.7399 6.02178H59.5212C59.4564 6.21261 59.4049 6.40773 59.3672 6.60572Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2966 7.18979H61.6808C61.7037 6.98106 61.7762 6.78083 61.8923 6.60586H59.3672C59.3164 6.87164 59.3013 7.08154 59.2966 7.18979ZM64.4508 7.18979H66.9371V7.14362C66.9314 6.96322 66.9133 6.78342 66.8831 6.60547H64.2362C64.3914 6.83012 64.4368 7.06874 64.4508 7.18979ZM59.295 7.79391H61.6754V7.27011C61.6754 7.27011 61.6754 7.23985 61.6808 7.18979H59.2966C59.2943 7.2414 59.295 7.27011 59.295 7.27011V7.79391ZM64.4566 7.79391H66.9371V7.18979H64.4508C64.457 7.23985 64.457 7.27011 64.457 7.27011V7.79391H64.4566Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 8.3773H61.6753V7.79297H59.2949V8.3773ZM64.4565 8.3773H66.9369V7.79297H64.4565V8.3773ZM59.2949 8.96123H61.6753V8.3773H59.2949V8.96123ZM64.4565 8.96123H66.9369V8.3773H64.4565V8.96123Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 9.54585H61.6753V8.96191H59.2949V9.54585ZM64.4565 9.54585H66.9369V8.96191H64.4565V9.54585ZM59.2949 10.1302H61.6753V9.54624H59.2949V10.1302ZM64.4565 10.1302H66.9369V9.54624H64.4565V10.1302Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 10.7138H61.6753V10.1299H59.2949V10.7138ZM64.4565 10.7138H66.9369V10.1299H64.4565V10.7138ZM59.2949 11.2978H61.6753V10.7138H59.2949V11.2978ZM64.4565 11.2978H66.9369V10.7138H64.4565V11.2978ZM59.2949 11.8817H61.6753V11.2978H59.2949V11.8817ZM64.4565 11.8817H66.9369V11.2978H64.4565V11.8817Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 12.4658H61.6753V11.8818H59.2949V12.4658ZM64.4565 12.4658H66.9369V11.8818H64.4565V12.4658Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 13.0492H61.6753V12.4648H59.2949V13.0492ZM64.4565 13.0492H66.9369V12.4648H64.4565V13.0492Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 13.6337H61.6753V13.0498H59.2949V13.6337ZM64.4565 13.6337H66.9369V13.0498H64.4565V13.6337ZM59.2949 14.2181H61.6753V13.6341H59.2949V14.2181ZM64.4565 14.2181H66.9369V13.6341H64.4565V14.2181ZM59.2949 14.8222H61.6753V14.2181H59.2949V14.8222ZM64.4565 14.8222H66.9369V14.2181H64.4565V14.8222Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 15.4062H61.6753V14.8223H59.2949V15.4062ZM64.4565 15.4062H66.9369V14.8223H64.4565V15.4062ZM59.2949 15.9901H61.6753V15.4062H59.2949V15.9901ZM64.4565 15.9901H66.9369V15.4062H64.4565V15.9901Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M59.2949 16.5736H61.6753V15.9893H59.2949V16.5736ZM64.4565 16.5736H66.9369V15.9893H64.4565V16.5736ZM66.9369 16.9965V16.5736H64.4565V16.9965H66.9369ZM61.6753 16.5736H59.2949V16.9965H61.6753V16.5736Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3819 4.43062H23.9941C23.4532 4.08258 22.7094 3.84668 21.6855 3.84668C20.6662 3.84668 19.9236 4.08258 19.3819 4.43062ZM18.7153 5.01456H24.6568C24.4668 4.78723 24.2432 4.5903 23.9937 4.43062H19.3819C19.1316 4.59059 18.9069 4.78746 18.7153 5.01456Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3394 5.57841H25.0292C24.9264 5.3774 24.8018 5.18833 24.6575 5.01465H18.7157C18.5701 5.18829 18.4439 5.37733 18.3394 5.57841Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0991 6.16206H25.2639C25.2034 5.96074 25.1248 5.76529 25.0291 5.57812H18.3393C18.2421 5.76531 18.1618 5.96072 18.0991 6.16206ZM17.9648 6.74639H20.5974C20.7786 6.50156 21.1123 6.26294 21.7257 6.26294C22.3585 6.26294 22.6934 6.50156 22.8695 6.74639H25.3923C25.3649 6.54871 25.322 6.35348 25.2643 6.16245H18.0991C18.032 6.37702 17.9905 6.57683 17.9648 6.74639Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9242 7.30986H20.3849V7.2695C20.3849 7.2695 20.4063 7.00411 20.5972 6.74609H17.9646C17.9169 7.06076 17.9242 7.2695 17.9242 7.2695V7.30986ZM23.0656 7.30986H25.4262V7.14379C25.4222 7.01068 25.4106 6.87791 25.3917 6.74609H22.8689C23.0551 7.00411 23.0656 7.2695 23.0656 7.2695V7.30986ZM17.9242 7.89379H20.3849V7.30986H17.9242V7.89379ZM23.0656 7.89379H25.4262V7.30986H23.0656V7.89379Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 8.47847H20.385V7.89453H17.9243V8.47847ZM23.0657 8.47847H25.4263V7.89453H23.0657V8.47847ZM17.9243 9.04223H20.385V8.47847H17.9243V9.04223ZM23.0657 9.04223H25.4263V8.47847H23.0657V9.04223Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 9.62593H20.385V9.04199H17.9243V9.62593ZM23.0657 9.62593H25.4263V9.04199H23.0657V9.62593ZM17.9243 10.1897H20.385V9.62593H17.9243V10.1897ZM23.0657 10.1897H25.4263V9.62593H23.0657V10.1897Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 10.7748H20.385V10.1904H17.9243V10.7748ZM23.0657 10.7748H25.4263V10.1904H23.0657V10.7748ZM17.9243 11.3587H20.385V10.7748H17.9243V11.3587ZM23.0657 11.3587H25.4263V10.7748H23.0657V11.3587Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 11.9222H20.385V11.3584H17.9243V11.9222ZM23.0657 11.9222H25.4263V11.3584H23.0657V11.9222Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 12.5062H20.385V11.9219H17.9243V12.5062ZM23.0657 12.5062H25.4263V11.9219H23.0657V12.5062Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 13.0898H20.385V12.5059H17.9243V13.0898ZM23.0657 13.0898H25.4263V12.5059H23.0657V13.0898Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 13.6536H20.385V13.0898H17.9243V13.6536ZM23.0657 13.6536H25.4263V13.0898H23.0657V13.6536ZM17.9243 14.2375H20.385V13.6536H17.9243V14.2375ZM23.0657 14.2375H25.4263V13.6536H23.0657V14.2375ZM17.9243 14.8219H20.385V14.2379H17.9243V14.8219ZM23.0657 14.8219H25.4263V14.2379H23.0657V14.8219Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 15.386H20.385V14.8223H17.9243V15.386ZM23.0657 15.386H25.4263V14.8223H23.0657V15.386ZM17.9243 15.97H20.385V15.386H17.9243V15.97ZM23.0657 15.97H25.4263V15.386H23.0657V15.97Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 16.5537H20.385V15.9697H17.9243V16.5537ZM23.0657 16.5537H25.4263V15.9697H23.0657V16.5537Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9243 17.1175H20.385V16.5537H17.9243V17.1175ZM23.0657 17.1175H25.4263V16.5537H23.0657V17.1175ZM17.9243 17.7018H20.385V17.1175H17.9243V17.7018ZM23.0657 17.7018H25.4263V17.1175H23.0657V17.7018Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9245 18.2649H20.3852V17.7012H17.9245V18.2649ZM23.0658 18.2649H25.4264V17.7012H23.0658V18.2649ZM17.9245 18.8493H20.3852V18.2649H17.9245V18.8493ZM23.0658 18.8493H25.4264V18.2649H23.0658V18.8493ZM14.8306 19.4328H25.4264V18.8493H23.0658V18.9901H20.3852V18.8493H17.9245V18.9901H14.5435L14.8306 19.4328Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1964 19.9981H25.4264V19.4336H14.8306L15.1964 19.9981ZM15.5747 20.5817H25.4264V19.9981H15.1964L15.5747 20.5817Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9534 21.165H25.4264V20.5811H15.5747L15.9534 21.165ZM18.0245 21.7291H20.3452V21.4067H23.1259V21.7291H25.4264V21.165H15.9534L16.0841 21.3668H18.0245V21.7291Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0244 22.3138H20.345V21.7295H18.0244V22.3138ZM23.1258 22.3138H25.4263V21.7295H23.1258V22.3138Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0244 22.897H20.345V22.3135H18.0244V22.897ZM23.1258 22.897H25.4263V22.3135H23.1258V22.897ZM18.0244 23.4608H20.345V22.897H18.0244V23.4608ZM23.1258 23.4608H25.4263V22.897H23.1258V23.4608Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0244 24.0453H20.345V23.4609H18.0244V24.0453ZM23.1258 24.0453H25.4263V23.4609H23.1258V24.0453ZM18.0244 24.6296H20.345V24.0453H18.0244V24.6296ZM23.1258 24.6296H25.4263V24.0453H23.1258V24.6296ZM18.0244 25.1933H20.345V24.6296H18.0244V25.1933ZM23.1258 25.1933H25.4263V24.6296H23.1258V25.1933Z" fill="#B3B3B3" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0244 25.7769H20.345V25.1934H18.0244V25.7769ZM23.1258 25.7769H25.4263V25.1934H23.1258V25.7769Z" fill="#B3B3B3" />
                    </svg></span>
                </div>
                <div class="col-xl-2 logos">
                    <span><svg width="52" height="28" viewBox="0 0 52 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2738 7.5671L12.0891 8.39789H10.0588C9.50504 14.3044 9.13599 19.0798 8.76694 21.2951C7.93649 25.2634 4.24495 27.478 1.8456 27.478C1.01515 27.478 0 27.1093 0 26.0942C0 25.5404 0.4614 25.079 1.01515 25.079C1.8456 25.079 2.4917 25.7248 2.9531 26.4629C4.24529 25.7248 4.42964 25.079 4.98339 22.4946C5.26044 21.2951 5.99854 12.7352 6.36759 8.39789H4.70635L4.89104 7.5671H6.55229L6.73699 6.09089C7.65979 0.646096 11.628 0 13.1049 0C13.843 0 15.3196 0.369052 15.3196 1.3842C15.3196 2.02995 14.7658 2.307 14.2121 2.307C13.1969 2.307 12.7355 1.75325 12.2738 0.922457C10.6125 1.6609 10.3358 5.7215 10.1511 7.56675H12.2738V7.5671ZM12.0894 15.1345C12.0894 10.7976 14.8582 7.01369 19.5645 7.01369C22.518 7.01369 24.1785 8.30588 24.1785 11.1666C24.1785 15.5039 21.4101 19.1725 16.7034 19.1725C13.7507 19.1725 12.0894 17.8803 12.0894 15.1345ZM20.3953 11.8127C20.3953 10.7052 20.303 8.02918 18.6421 8.02918C16.2427 8.02918 15.8733 12.7355 15.8733 14.4891C15.8733 15.5043 15.9657 18.25 17.6266 18.25C20.0259 18.2497 20.3953 13.566 20.3953 11.8127ZM25.194 15.1345C25.194 10.7976 28.0551 7.01369 32.7615 7.01369C35.6225 7.01369 37.3525 8.30588 37.3525 11.1666C37.3525 15.5039 34.5147 19.1725 29.8084 19.1725C26.9473 19.1725 25.194 17.8803 25.194 15.1345ZM33.5919 11.8127C33.5919 10.7052 33.4999 8.02918 31.8387 8.02918C29.347 8.02918 29.0703 12.7355 29.0703 14.4891C29.0703 15.5043 29.0703 18.25 30.7312 18.25C33.2225 18.2497 33.5919 13.566 33.5919 11.8127ZM51.6572 17.7883C49.9956 18.5264 47.9653 19.1721 46.5815 19.1721C45.8434 19.1721 45.935 18.0643 45.935 17.6032C45.935 17.0502 45.935 16.311 46.1201 14.8582L46.0274 14.7655C45.1046 16.6804 43.259 19.1721 40.8596 19.1721C39.0137 19.1721 38.1829 17.2342 38.1829 15.5963C38.1829 11.5353 41.4127 7.19839 46.0274 7.19839H46.9502C47.3196 4.3373 47.3196 3.13779 47.3196 2.21465C47.3196 1.93795 47.3196 1.6609 47.0425 1.6609C46.7655 1.6609 46.3968 1.75325 45.4736 2.02995L45.2893 1.29185C47.1352 0.646097 49.1655 0.276702 51.0108 0.184354C51.1958 0.184354 51.2878 0.184354 51.2878 0.553405C51.2878 2.95275 49.4419 15.5036 49.4419 16.7731C49.4419 17.0502 49.4419 17.5112 49.8113 17.5112C49.9956 17.5112 50.6421 17.3262 51.3802 17.0498L51.6572 17.7883ZM45.658 13.843C46.3044 12.2741 46.4888 10.7052 46.8582 8.30588C46.6731 8.21319 46.4888 8.21319 46.3968 8.21319C43.5357 8.21319 42.1511 12.4585 42.1511 14.7655C42.1511 15.3192 42.2438 16.6804 43.0743 16.6804C44.2741 16.6808 45.2893 14.7658 45.658 13.843Z" fill="#B3B3B3" />
                    </svg></span>
                </div>
                <div class="col-xl-2 logos">
                    <span><svg width="76" height="25" viewBox="0 0 76 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M65.1818 18.3805C64.858 18.3805 64.615 18.2995 64.4261 18.1106C64.2642 17.9486 64.1562 17.6787 64.1562 17.3548V7.39537C64.1562 7.07149 64.2372 6.80158 64.4261 6.63964C64.615 6.4777 64.858 6.39673 65.1818 6.39673H66.9902C67.3951 6.39673 67.7459 6.42372 68.0428 6.45071C68.3397 6.50469 68.6096 6.58566 68.7986 6.7476C69.0145 6.90954 69.1494 7.12547 69.2574 7.44935C69.3653 7.74625 69.4193 8.17809 69.4193 8.69091V16.0863C69.4193 16.761 69.3384 17.2469 69.1494 17.5708C68.9605 17.8946 68.6906 18.1106 68.3397 18.2185C67.9888 18.3265 67.53 18.3805 66.9902 18.3535L65.1818 18.3805ZM59.3789 0.593789C59.055 0.620779 58.7851 0.701751 58.6232 0.863693C58.4612 1.02564 58.3803 1.29554 58.3803 1.61942V23.1578C58.3803 23.4817 58.4612 23.7246 58.6502 23.9135C58.8121 24.0754 59.082 24.1834 59.4059 24.1834H66.9092C68.4747 24.1834 69.8242 24.0215 70.9038 23.6976C71.9834 23.3737 72.8471 22.8609 73.4949 22.2131C74.1426 21.5653 74.6285 20.7016 74.8984 19.676C75.1953 18.6504 75.3302 17.4628 75.3302 16.0863V8.69091C75.3302 7.3144 75.1953 6.12682 74.8984 5.10119C74.6015 4.07555 74.1426 3.23885 73.4949 2.59108C72.8471 1.91632 71.9834 1.43049 70.9038 1.10661C69.8242 0.782722 68.5017 0.620779 66.9092 0.620779L59.3789 0.593789ZM49.5544 14.8177C49.5544 15.4655 49.5274 16.0593 49.5004 16.5721C49.4464 17.0849 49.3385 17.5168 49.1765 17.8946C49.0146 18.2725 48.7447 18.5424 48.3668 18.7313C48.0159 18.9203 47.5301 19.0282 46.9093 19.0282C46.2886 19.0282 45.8027 18.9203 45.4519 18.7313C45.074 18.5424 44.8311 18.2725 44.6421 17.8946C44.4802 17.5438 44.3722 17.0849 44.3182 16.5721C44.2643 16.0593 44.2373 15.4655 44.2643 14.8177V9.95946C44.2643 9.31169 44.2913 8.7179 44.3182 8.20508C44.3722 7.69227 44.4802 7.26042 44.6421 6.88255C44.8041 6.50469 45.074 6.23478 45.4519 6.04585C45.8027 5.85692 46.2886 5.74896 46.9093 5.74896C47.5301 5.74896 48.0159 5.85692 48.3668 6.04585C48.7447 6.23478 48.9876 6.50469 49.1765 6.88255C49.3385 7.23343 49.4464 7.69227 49.5004 8.20508C49.5544 8.7179 49.5544 9.31169 49.5544 9.95946V14.8177ZM55.3303 8.17809C55.3303 7.80023 55.3033 7.34139 55.2494 6.80158C55.1954 6.26178 55.0874 5.69498 54.8985 5.0742C54.7096 4.45342 54.4397 3.85963 54.0888 3.26584C53.7109 2.67205 53.2251 2.13224 52.6043 1.64641C51.9835 1.16059 51.2008 0.755731 50.2561 0.458837C49.3115 0.161942 48.1779 0.0269904 46.8554 0C45.5328 0 44.3992 0.161942 43.4546 0.458837C42.5099 0.755731 41.7272 1.16059 41.1064 1.64641C40.4856 2.13224 39.9998 2.67205 39.6219 3.26584C39.2441 3.85963 38.9741 4.48041 38.8122 5.0742C38.6233 5.69498 38.5153 6.26178 38.4613 6.80158C38.4073 7.34139 38.3804 7.80023 38.3804 8.17809V16.5991C38.3804 16.977 38.4073 17.4358 38.4613 17.9756C38.5153 18.5154 38.6233 19.0822 38.8122 19.703C38.9741 20.3238 39.271 20.9176 39.6219 21.5114C39.9998 22.1051 40.4856 22.645 41.1064 23.1578C41.7272 23.6436 42.5099 24.0485 43.4546 24.3184C44.3992 24.6153 45.5328 24.7772 46.8554 24.7772C48.1779 24.7772 49.3115 24.6153 50.2561 24.3184C51.2008 24.0215 51.9835 23.6436 52.6043 23.1578C53.2251 22.6719 53.7109 22.1321 54.0888 21.5114C54.4666 20.9176 54.7365 20.2968 54.8985 19.703C55.0604 19.0822 55.1954 18.5154 55.2494 17.9756C55.3033 17.4358 55.3303 16.977 55.3303 16.5991V8.17809ZM29.9324 14.8177C29.9324 15.4655 29.9054 16.0593 29.8784 16.5721C29.8244 17.0849 29.7164 17.5168 29.5545 17.8946C29.3926 18.2725 29.1227 18.5424 28.7448 18.7313C28.3939 18.9203 27.9081 19.0282 27.2873 19.0282C26.6665 19.0282 26.1807 18.9203 25.8298 18.7313C25.452 18.5424 25.209 18.2725 25.0201 17.8946C24.8582 17.5438 24.7502 17.0849 24.6962 16.5721C24.6422 16.0593 24.6153 15.4655 24.6422 14.8177V9.95946C24.6422 9.31169 24.6692 8.7179 24.6962 8.20508C24.7502 7.69227 24.8582 7.26042 25.0201 6.88255C25.182 6.50469 25.452 6.23478 25.8298 6.04585C26.1807 5.85692 26.6665 5.74896 27.2873 5.74896C27.9081 5.74896 28.3939 5.85692 28.7448 6.04585C29.1227 6.23478 29.3656 6.50469 29.5545 6.88255C29.7164 7.23343 29.8244 7.69227 29.8784 8.20508C29.9324 8.7179 29.9324 9.31169 29.9324 9.95946V14.8177ZM35.7353 8.17809C35.7353 7.80023 35.7083 7.34139 35.6543 6.80158C35.6003 6.26178 35.4924 5.69498 35.3035 5.0742C35.1145 4.45342 34.8446 3.85963 34.4937 3.26584C34.1159 2.67205 33.6301 2.13224 33.0093 1.64641C32.3885 1.16059 31.6058 0.755731 30.6611 0.458837C29.7164 0.161942 28.5828 0.0269904 27.2603 0C25.9378 0 24.8042 0.161942 23.8595 0.458837C22.9149 0.755731 22.1321 1.16059 21.5114 1.64641C20.8906 2.13224 20.4047 2.67205 20.0269 3.26584C19.649 3.85963 19.3791 4.48041 19.2172 5.0742C19.0282 5.69498 18.9203 6.26178 18.8663 6.80158C18.8123 7.34139 18.7853 7.80023 18.7853 8.17809V16.5991C18.7853 16.977 18.8123 17.4358 18.8663 17.9756C18.9203 18.5154 19.0282 19.0822 19.2172 19.703C19.3791 20.3238 19.676 20.9176 20.0269 21.5114C20.4047 22.1051 20.8906 22.645 21.5114 23.1578C22.1321 23.6436 22.9149 24.0485 23.8595 24.3184C24.8042 24.6153 25.9378 24.7772 27.2603 24.7772C28.5828 24.7772 29.7164 24.6153 30.6611 24.3184C31.6058 24.0215 32.3885 23.6436 33.0093 23.1578C33.6301 22.6719 34.1159 22.1321 34.4937 21.5114C34.8716 20.9176 35.1415 20.2968 35.3035 19.703C35.4654 19.0822 35.6003 18.5154 35.6543 17.9756C35.7083 17.4358 35.7353 16.977 35.7353 16.5991V8.17809ZM15.8164 0.593789C16.4911 0.593789 16.815 0.944664 16.815 1.59243V5.37109C16.815 5.69498 16.7341 5.93789 16.5721 6.12682C16.4102 6.31576 16.1403 6.39673 15.8164 6.39673H7.01751C6.69362 6.39673 6.45071 6.4777 6.26178 6.63964C6.07284 6.80158 5.99187 7.07149 5.99187 7.39537V23.1848C5.99187 23.5086 5.9109 23.7516 5.74896 23.9405C5.58701 24.1024 5.31711 24.2104 4.99323 24.2104H1.02564C0.70175 24.2104 0.458837 24.1294 0.269904 23.9405C0.107962 23.7516 0 23.5086 0 23.1848V1.61942C0 1.29554 0.0809712 1.02564 0.269904 0.863693C0.458837 0.701751 0.70175 0.620779 1.02564 0.620779L15.8164 0.593789Z" fill="#B3B3B3" />
                    </svg></span>
                </div>
                <div class="col-xl-2 logos">
                    <span><svg width="132" height="32" viewBox="0 0 132 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M113.174 0C111.104 0 109.411 1.6718 109.416 3.74189C109.411 5.82247 111.12 7.48903 113.195 7.48379C115.265 7.48903 116.921 5.82247 116.921 3.74189C116.916 1.67704 115.244 0 113.174 0ZM45.2434 0.062889C43.1628 0.062889 41.4857 1.71897 41.4857 3.78906C41.4857 5.86964 43.168 7.5624 45.2434 7.56764C47.3082 7.56764 48.9853 5.86964 48.9853 3.78906C48.9905 1.71897 47.3082 0.062889 45.2434 0.062889ZM101.141 4.26597C99.0763 4.26597 97.3836 5.93777 97.3836 8.00786C97.3836 10.078 99.0711 11.7655 101.141 11.7655C103.216 11.7655 104.883 10.0832 104.883 8.00786C104.888 5.94301 103.216 4.26597 101.141 4.26597ZM125.28 4.26597C123.215 4.26597 121.522 5.93777 121.522 8.00786C121.522 10.078 123.215 11.7655 125.28 11.7655C127.361 11.7655 129.006 10.078 129.006 8.00786C129.006 5.93777 127.361 4.26073 125.28 4.26597ZM57.0822 4.32886C55.0174 4.32886 53.3246 6.02162 53.3246 8.08647C53.3246 10.1618 55.0121 11.8284 57.0822 11.8284C59.1418 11.8284 60.8241 10.1566 60.8241 8.08647C60.8241 6.02162 59.1471 4.32886 57.0822 4.32886ZM33.1844 4.42843C31.1196 4.42319 29.4425 6.09499 29.4425 8.15984V8.17557C29.4425 10.2509 31.1091 11.9384 33.1844 11.9332C35.244 11.9332 36.9263 10.2457 36.9263 8.17557C36.9263 6.10023 35.244 4.42843 33.1844 4.42843ZM114.458 13.17C114.458 13.17 107.011 13.2172 106.922 13.2172C105.653 13.2172 104.579 14.2968 104.579 15.5598L104.563 29.1019H104.579C104.637 30.7055 105.978 32 107.593 32C109.222 32 110.564 30.7055 110.622 29.1019V24.3957C110.622 24.3957 113.598 24.38 113.698 24.38C114.846 24.38 115.8 23.4681 115.8 22.3151C115.8 21.1569 114.851 20.2136 113.698 20.2136H110.622V18.961H114.463C116.056 18.961 117.335 17.6875 117.33 16.0943C117.325 14.5169 116.051 13.17 114.458 13.17ZM128.162 13.17C128.162 13.17 120.715 13.2172 120.626 13.2172C119.348 13.2172 118.284 14.2915 118.284 15.5598V29.1019H118.299C118.352 30.7055 119.672 32 121.297 32C122.932 32 124.242 30.7108 124.295 29.1019H124.311V24.3957C124.311 24.3957 127.282 24.38 127.387 24.38C128.535 24.38 129.488 23.4681 129.488 22.3151C129.488 21.1569 128.535 20.2136 127.387 20.2136H124.305V18.961H128.147C129.729 18.961 131.013 17.6875 131.013 16.0943C131.013 14.5169 129.745 13.1648 128.162 13.17ZM60.756 13.2014C59.168 13.2014 57.8893 14.4802 57.8893 16.0524C57.8893 16.1572 57.9102 16.2673 57.9207 16.3773L57.905 29.0757L57.9207 29.2224C57.9993 30.7213 59.2414 31.9266 60.7717 31.9266C62.3596 31.9266 63.6384 30.6531 63.6384 29.0757C63.6384 28.8922 63.6227 28.7193 63.5912 28.5568V24.7887L67.8572 30.5169C67.9201 30.6112 67.9882 30.7055 68.0511 30.8104L68.0668 30.8418C68.6171 31.4812 69.4504 31.8847 70.3623 31.8847C72.0236 31.8847 73.36 30.5431 73.36 28.887C73.3652 28.3105 73.2027 27.7445 72.8883 27.2571L72.8411 27.1942C72.7992 27.1261 72.7625 27.058 72.7101 27.0003L68.8529 21.8225L71.9921 18.0282H71.9764C72.3852 17.5303 72.642 16.8962 72.642 16.1887C72.6367 14.5745 71.3266 13.2434 69.7124 13.2434C68.6538 13.2434 67.7366 13.8041 67.2231 14.6426L63.5912 19.0239V16.4821C63.6069 16.3406 63.6227 16.1887 63.6227 16.0419C63.6227 14.4802 62.3387 13.2014 60.756 13.2014ZM2.53652 13.2172C1.13724 13.2172 0.0157222 14.3596 0.0157222 15.738C0.0157222 15.738 0 29.1857 0 29.4111C0 30.8418 1.09008 31.9161 2.5208 31.9161L9.02981 31.9319C12.2267 31.9319 14.8261 29.3482 14.8261 26.1513C14.8261 24.3433 14.019 22.7344 12.7245 21.6757C13.4844 20.7743 13.9613 19.6056 13.9613 18.3217C13.9666 15.5126 11.6345 13.2067 8.79921 13.2119H2.53652V13.2172ZM46.4854 13.301C41.3704 13.301 37.2093 17.4569 37.2093 22.5771C37.2093 27.6973 41.3704 31.869 46.4854 31.869C51.6056 31.869 55.7668 27.6973 55.7615 22.5771C55.7615 17.4569 51.6056 13.301 46.4854 13.301ZM25.5015 13.3325C20.376 13.3325 16.2358 17.4989 16.2411 22.6295C16.2411 27.7445 20.3708 31.8952 25.5015 31.8899C30.6322 31.8899 34.7776 27.7445 34.7776 22.6295C34.7776 17.5041 30.6322 13.3325 25.5015 13.3325ZM93.7989 13.3325C88.6577 13.3325 84.4861 17.5146 84.4861 22.661C84.4861 27.7969 88.6525 31.9738 93.7989 31.9738C98.9348 31.9738 103.112 27.7969 103.112 22.661C103.112 17.5146 98.94 13.3325 93.7989 13.3325ZM5.05732 17.4307H7.38421C8.15984 17.4307 8.78349 18.0439 8.78349 18.83C8.78349 19.5952 8.1546 20.1978 7.38421 20.1978C7.31084 20.1978 5.05732 20.2136 5.05732 20.2136V17.4307ZM78.2915 18.6518C76.2214 18.6518 74.5549 20.3393 74.5496 22.4094C74.5549 24.4795 76.2214 26.167 78.2915 26.167C80.3668 26.167 82.0491 24.4795 82.0491 22.4094C82.0439 20.3446 80.3564 18.6518 78.2915 18.6518ZM46.4854 18.7357C48.6132 18.7357 50.3426 20.4599 50.3426 22.5929C50.3426 24.7154 48.6132 26.4343 46.4854 26.4343C44.3577 26.4343 42.644 24.7049 42.644 22.5771C42.6387 20.4599 44.3524 18.7409 46.4697 18.7357H46.4854ZM25.5015 18.7671C27.624 18.7671 29.3587 20.4913 29.3587 22.6243C29.3587 24.752 27.6292 26.471 25.5015 26.4658C23.3947 26.471 21.6652 24.752 21.66 22.6243C21.66 20.4913 23.3895 18.7671 25.5015 18.7671ZM93.7989 18.7986C95.9319 18.7986 97.6561 20.5123 97.6561 22.6557C97.6561 24.7835 95.9266 26.5129 93.7989 26.5129C91.6659 26.5129 89.9364 24.7835 89.9417 22.6557C89.9364 20.528 91.6554 18.8038 93.7831 18.7986H93.7989ZM5.05732 24.1703L8.01834 24.186C8.82542 24.186 9.48575 24.8254 9.48575 25.6325C9.48051 26.4501 8.83066 27.0999 8.01834 27.0999H5.07304L5.05732 24.1703ZM128.031 27.0999C126.679 27.0999 125.605 28.1847 125.605 29.5421C125.61 30.9047 126.674 31.9843 128.031 31.9843C129.384 31.9843 130.474 30.8994 130.474 29.5421C130.479 28.1952 129.389 27.1051 128.042 27.0999C128.042 27.0999 128.037 27.0999 128.031 27.0999ZM128.031 27.3462C129.237 27.3462 130.227 28.3262 130.227 29.5421C130.227 30.7527 129.237 31.738 128.031 31.738C126.821 31.738 125.851 30.7475 125.851 29.5421C125.851 28.3262 126.821 27.3462 128.031 27.3462ZM126.926 28.0956V30.9256H127.513V29.8199H128.115C128.288 29.8199 128.414 29.8408 128.472 29.9037C128.535 29.9561 128.571 30.0819 128.571 30.2601V30.5221C128.571 30.6112 128.582 30.6846 128.587 30.7684C128.597 30.8156 128.618 30.8732 128.634 30.9309H129.284V30.868C129.226 30.8366 129.184 30.7632 129.169 30.6898C129.158 30.6426 129.153 30.5588 129.153 30.4278V30.2496C129.153 30.0504 129.127 29.9037 129.069 29.8094C129.017 29.7098 128.912 29.6364 128.791 29.584C128.938 29.5316 129.069 29.4373 129.132 29.3063C129.2 29.1805 129.226 29.0495 129.232 28.9132C129.232 28.7979 129.216 28.7088 129.184 28.6197C129.142 28.5306 129.085 28.452 129.022 28.3734C128.954 28.2843 128.859 28.2214 128.76 28.1795C128.65 28.1323 128.514 28.1061 128.32 28.0956H126.926ZM127.513 28.5988H128.194C128.325 28.5988 128.409 28.6145 128.472 28.6459C128.587 28.7036 128.65 28.8136 128.65 28.9866C128.65 29.1386 128.582 29.2434 128.472 29.2958C128.404 29.3272 128.314 29.3429 128.178 29.3429H127.513V28.5988Z" fill="#B3B3B3" />
                    </svg></span>
                </div>
                <div class="col-xl-2 logos">
                    <span><svg width="87" height="32" viewBox="0 0 87 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.3344 25.5529L9.04011 25.4493L9.06206 25.4044L0.758575 24.0751L0.716205 23.9148L7.67865 23.8153C7.67865 23.8153 7.62097 23.6769 7.44332 23.3339L0.279743 22.193L0.25524 22.0327L6.95735 21.9362L6.8527 21.4686L0.0566634 20.4537L0.0490061 20.2562L6.65106 20.1612L6.60001 19.6748L0 18.59L0.0112306 18.4287L6.60205 18.3337C6.56785 18.1454 6.62298 17.7645 6.62298 17.7645L0.104649 16.7722L0.133746 16.6098L6.71997 16.5333C6.71895 16.4393 6.75724 16.0937 6.75724 16.0937L0.346617 14.9426L0.375714 14.7808L7.02422 14.6848C7.02422 14.6848 7.06761 14.3203 7.14367 14.1309L0.735603 13.1529L0.782567 12.9905L7.44485 12.8945C7.44485 12.8945 7.58319 12.5086 7.65977 12.3662L1.28131 11.4039L1.32827 11.26L8.10286 11.1625C8.10286 11.1625 8.29889 10.7546 8.34432 10.6443L2.01487 9.66474L2.08021 9.52027L8.97528 9.42123C8.97528 9.42123 9.16007 9.05828 9.32955 8.80457L3.00673 7.82547L3.07156 7.69887L10.1627 7.61465C10.1627 7.61465 10.376 7.27874 10.5624 7.10365L4.17063 6.14599L4.28957 6.00101L11.5394 5.89687C11.5394 5.89687 11.8222 5.58854 12.0244 5.42876L5.73985 4.46957L5.84092 4.32459L13.2281 4.21229L13.711 3.78399L7.98647 2.5471L7.97269 2.54863C10.4296 0.991663 13.4787 0.0508471 17.1527 0.00184092C23.9824 -0.0905561 29.7493 3.29036 29.9417 11.2288L21.0624 11.3483C20.7684 8.53402 19.0905 7.57482 16.6999 7.60698C11.5348 7.67641 9.30402 13.2141 9.37447 18.4654C9.42297 22.0505 10.9917 24.4207 14.7907 24.3686C17.3094 24.3349 19.4315 23.4105 20.3376 20.9219L16.0689 20.9785L17.3472 14.4291L29.8116 14.2611L26.5374 31.084L20.6035 31.1636L20.82 28.2156L20.7337 28.1309C18.8061 30.8038 15.7897 31.9544 12.5456 31.9983C6.20439 32.084 2.9225 28.9471 1.34359 25.5785L1.3344 25.5529ZM47.0745 14.4944C46.1648 13.9574 45.0377 13.5873 43.5864 13.6041C41.7793 13.6245 39.8165 14.3591 39.843 16.6313C39.8798 19.8345 46.3961 19.7871 46.4538 24.7969C46.4869 27.6714 44.5257 30.9528 39.9262 31.0054C37.7087 31.0314 36.115 30.5567 34.5749 29.9717L35.4223 27.4433C36.5525 28.1421 38.1191 28.6169 39.4607 28.602C42.3628 28.5684 43.5741 26.7475 43.5553 25.1594C43.5108 21.2721 37.0027 22.0316 36.9415 16.7206C36.9011 13.2432 40.0544 11.2355 43.203 11.1992C44.7906 11.1809 46.3547 11.4642 47.8127 12.0497L47.0745 14.4944ZM58.0177 30.2218C56.6797 30.5659 55.2866 30.8283 53.891 30.8441C50.4963 30.8829 47.441 29.55 47.3839 24.6218C47.3395 20.7616 49.9985 16.2678 54.9267 16.2106C58.2939 16.1718 60.2061 18.176 60.2449 21.489C60.2551 22.4191 60.1551 23.2149 60.0275 24.0373L50.1987 24.1512C50.1476 24.4408 50.1235 24.7346 50.1267 25.0287C50.1604 27.9578 51.9772 28.7853 54.4688 28.7567C55.7552 28.7419 57.1478 28.3979 58.4011 27.8624L58.0177 30.2218ZM57.596 22.1491C57.6471 21.7381 57.6701 21.4094 57.666 21.0801C57.6481 19.4379 56.621 18.2725 54.6771 18.2944C52.5693 18.3184 50.9751 20.172 50.4519 22.2318L57.596 22.1491ZM61.9081 18.5936C62.0117 18.0172 62.1674 17.2765 62.2669 16.4541L64.6769 16.4261L64.2639 18.6487H64.3186C65.1241 17.3245 66.6157 16.0754 69.0522 16.0473C69.2983 16.0442 69.7373 16.0942 70.2325 16.2806L69.6832 18.5588C69.1885 18.3735 68.7771 18.2954 68.5857 18.2985C65.41 18.3342 63.8887 21.8019 63.5528 23.5309L62.1807 30.4194L59.6073 30.4495L61.9081 18.5936ZM71.0273 16.352L73.6006 16.3229L70.8047 30.3193L68.2314 30.3494L71.0273 16.352ZM74.4138 13.1922L71.5112 13.2253L72.0794 10.3161L74.982 10.2829L74.4138 13.1922ZM83.8302 29.9227C82.4922 30.2667 81.0991 30.5291 79.7034 30.5449C76.3087 30.5848 73.2535 29.2509 73.1968 24.3227C73.1519 20.4624 75.811 15.9687 80.7392 15.9115C84.1063 15.8732 86.0186 17.8779 86.0574 21.1899C86.0676 22.121 85.9675 22.9158 85.8399 23.7392L76.0111 23.852C75.9601 24.1417 75.936 24.4354 75.9391 24.7295C75.9728 27.6587 77.7896 28.4862 80.2813 28.4576C81.5677 28.4438 82.9603 28.0987 84.2135 27.5642L83.8302 29.9227ZM83.4085 21.8499C83.4595 21.439 83.4825 21.1102 83.4784 20.781C83.4595 19.1388 82.4335 17.9733 80.4896 17.9953C78.3818 18.0203 76.7876 19.8728 76.2643 21.9326L83.4085 21.8499Z" fill="#B3B3B3" />
                    </svg></span>
                </div>
            </div>
        </div>
    </section>

@endsection