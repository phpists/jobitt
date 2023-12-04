<!DOCTYPE html>
<html lang="en">
    @php
        $pattern = '/<span(?:\s+class="[\w\s]*")?>(.*?)<\/span>/';
        $job_title = $selected_technology??$selected_position;
    @endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="{{preg_replace($pattern, $job_title, $page->description)}}">
    <title>{{preg_replace($pattern, $job_title, $page->title)}}</title>
    <link rel="stylesheet" href="{{asset('styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('styles/index.css')}}">
    <link data-n-head="ssr" rel="icon" type="image/svg" href="{{asset('img/favicon.svg')}}">
    <link data-n-head="ssr" rel="icon" href="{{asset('img/favicon.ico')}}">

    <script src="https://cdn.jsdelivr.net/npm/d3@7"></script>
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
</head>

<body>
<div data-v-51576258="">
    <div data-v-51576258="" class="page-header page-header-fixed">
        <div data-v-51576258="" class="page-header__inner header-static"><!----> <!---->
            <div data-v-51576258="" class="banner-israel">
                <picture data-v-51576258="">
                    <source data-v-51576258="" media="(max-width: 756px)" srcset="{{asset('/img/banner_israel_mobile.jpg')}}">
                    <source data-v-51576258="" media="(min-width: 757px)" srcset="{{asset('/img/banner_israel.jpg')}}">
                    <img data-v-51576258="" src="{{asset('/img/banner_israel.jpg')}}" alt="banner">
                </picture>
            </div>
            <header data-v-51576258="" id="header-el" class="header fixed">
                <div data-v-51576258="" class="left">
                    <div data-v-51576258="" class="menu"><a data-v-51576258="" class="is-menu">
                            <svg data-v-51576258="" width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path data-v-51576258="" d="M1 1H16" stroke="#23303D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path data-v-51576258="" d="M1 6H16" stroke="#23303D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path data-v-51576258="" d="M1 11H16" stroke="#23303D" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                        </a>
                        <div data-v-51576258="" class="sub-menu">
                            <ul data-v-51576258="" class="left-menu">
                                <li data-v-51576258=""><a data-v-51576258="" href="javascript: void(0)" class=""><span data-v-51576258="">Job openings</span> <span data-v-51576258=""><svg data-v-51576258="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path data-v-51576258="" d="M1 6H6M6 6H11M6 6L6 1M6 6V11" stroke="#23303D" stroke-linecap="round"></path>
                                                </svg></span></a>
                                </li>
                                <li data-v-51576258=""><a data-v-51576258="" href="https://jobitt.com/candidates" class=""> All Candidates&nbsp;
                                        <!----></a></li>
                                <li data-v-51576258=""><a data-v-51576258="" href="/resume-builder" class=""> Resume
                                        Builder&nbsp;<!----></a></li>
                                <li data-v-51576258=""><a data-v-51576258="" href="/blog" class=""> Blog&nbsp;
                                        <!----></a></li>
                                <li data-v-51576258=""><a data-v-51576258="" href="/companies" class=""> Companies&nbsp;
                                        <!----></a></li> <!---->
                            </ul>
                            <div data-v-51576258="" class="sub-menu_auth">
                                <div data-v-51576258="" class="auth-links"><a data-v-51576258="" href="https://jobitt.com/login" class="btn-dark signin-link">Sign in</a>
                                    <a data-v-51576258="" href="https://jobitt.com/register" class="btn-dark signup-link">Sign up</a>
                                </div>
                            </div>
                            <div data-v-51576258="" class="sub-menu_lang">
                                <div data-v-821f6b8e="" data-v-51576258="" class="lang-switcher">
                                    <div data-v-821f6b8e="" class="lang-globe">
                                        <svg data-v-821f6b8e="" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path data-v-821f6b8e="" d="M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21Z" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path data-v-821f6b8e="" d="M1 11H21" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path data-v-821f6b8e="" d="M11 1C13.5013 3.73835 14.9228 7.29203 15 11C14.9228 14.708 13.5013 18.2616 11 21C8.49872 18.2616 7.07725 14.708 7 11C7.07725 7.29203 8.49872 3.73835 11 1V1Z" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div data-v-821f6b8e="" class="lang-short-name"><span data-v-821f6b8e="">en</span>
                                    </div> <!---->
                                </div>
                            </div>
                            <div data-v-dfd6d346="" data-v-51576258="" class="mega-menu">
                                <div data-v-dfd6d346="" class="mobile">
                                    <div data-v-dfd6d346="" class="mobile-nav-container">
                                        <div data-v-dfd6d346="" class="mobile-back">
                                            Job openings
                                        </div>
                                        <div data-v-dfd6d346="" class="mobile-title"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings" class="btn-black">View all</a></div>
                                    </div>
                                    <ul data-v-dfd6d346="" class="mobile-categories">
                                        <li data-v-dfd6d346="" class="active">
                                            Development
                                        </li>
                                        <li data-v-dfd6d346="" class="">
                                            Technical
                                        </li>
                                        <li data-v-dfd6d346="" class="">
                                            Other
                                        </li>
                                    </ul>
                                </div>
                                <div data-v-dfd6d346="" id="mega-menu-title" class="mega-menu-col mega-menu-title-bar">
                                    <div data-v-dfd6d346="" class="mega-menu-title"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings">Job openings</a></div>
                                    <div data-v-dfd6d346="" class="mega-menu-button"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings" class="btn-black">View all</a></div>
                                </div>
                                <div data-v-dfd6d346="" class="mega-menu-content">
                                    <div data-v-dfd6d346="" id="development-items" class="mega-menu-col active">
                                        <div data-v-dfd6d346="" class="mega-menu-col-title">
                                            Development
                                        </div>
                                        <div data-v-dfd6d346="" class="mega-menu-list">
                                            <div data-v-dfd6d346="" class="row">
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/c-sharp" class="">C# /.NET</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/c" class="">C / C++ / Embedded</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/frontend" class="">Front-End / JS</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/golang" class="">Golang</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/ios" class="">IOS</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/java" class="">Java</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/node" class="">Node.js</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/php" class="">PHP</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/python" class="">Python</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/flutter" class="">Flutter</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/ruby" class="">Ruby</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/android" class="">Android</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-dfd6d346="" id="technical-items" class="mega-menu-col active">
                                        <div data-v-dfd6d346="" class="mega-menu-col-title">
                                            Technical
                                        </div>
                                        <div data-v-dfd6d346="" class="mega-menu-list">
                                            <div data-v-dfd6d346="" class="row">
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/business" class="">Business
                                                        Analyst</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/data-science" class="">Data
                                                        Science</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/data-analyst" class="">Data
                                                        Analyst</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/data-engineer" class="">Data
                                                        Engineer</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/devops" class="">DevOps</a>
                                                </div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/design" class="">Design /
                                                        UI/UX</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/illustrator" class="">2D/3D Artist
                                                        / Illustrator</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/gamedev" class="">Gamedev /
                                                        Unity</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/lead" class="">Lead /
                                                        Architect / CTO</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/product-manager" class="">Product
                                                        Manager</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/project-manager" class="">Project
                                                        Manager</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/scrum-master" class="">Scrum Master
                                                        / Agile Coach</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/qa-automation" class="">QA
                                                        Automation</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/qa-manual" class="">QA Manual</a>
                                                </div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/sql" class="">SQL / DBA</a>
                                                </div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/security" class="">Security</a>
                                                </div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/seo" class="">SEO</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-dfd6d346="" id="other-items" class="mega-menu-col active">
                                        <div data-v-dfd6d346="" class="mega-menu-col-title">Other</div>
                                        <div data-v-dfd6d346="" class="mega-menu-list">
                                            <div data-v-dfd6d346="" class="row">
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/marketing" class="">Marketing</a>
                                                </div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/hr" class="">HR /
                                                        Recruiters</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/sales" class="">Sales</a>
                                                </div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/technical-support" class="">Customer /
                                                        Technical Support</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/lead-generation" class="">Lead
                                                        Generation</a></div>
                                                <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/ppc" class="">PPC</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-51576258="" class="logo"><a data-v-51576258="" href="https://jobitt.com/" class="nuxt-link-active"><img data-v-51576258="" src="{{asset('img/header-logo-ua.svg')}}" alt="Jobitt" sizes="(max-width: 320px) 77px, 144px" srcset="{{('img/header-logo-ua.svg')}} 77w, {{asset('img/header-logo-ua.svg')}} 144w" class="logo-img"></a> <a data-v-51576258="" href="https://u24.gov.ua/" target="_blank" class="logo-img-heart"><img data-v-51576258="" src="{{asset('img/header-logo-ua-heart.svg')}}" alt="Jobitt" sizes="(max-width: 320px) 17px, 31px" srcset="{{asset('img/header-logo-ua-heart-17.svg')}} 17w, {{asset('img/header-logo-ua-heart.svg')}} 31w" class="logo-img"></a> <!----></div>
                </div>
                <div data-v-51576258="" class="center">
                    <div data-v-51576258="" class="search">
                        <div data-v-5333fc61="" data-v-51576258="" class="search-wrapper" id="header-search-top">
                            <div data-v-5333fc61="" class="search-group"><input data-v-5333fc61="" type="text" name="header_search_top" placeholder="e.g. Web developer, UI/UX Designer etc." class="search-input" spellcheck="false" data-ms-editor="true"> <!---->
                                <button data-v-5333fc61="" class="search-button">
                                    <svg data-v-5333fc61="" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path data-v-5333fc61="" d="M0.5 0.5H50C54.7282 0.5 58.224 0.501062 60.9061 0.861658C63.5738 1.22032 65.3614 1.9264 66.7175 3.28249C68.0736 4.63857 68.7797 6.42621 69.1383 9.09391C69.4989 11.776 69.5 15.2718 69.5 20V50C69.5 54.7282 69.4989 58.224 69.1383 60.9061C68.7797 63.5738 68.0736 65.3614 66.7175 66.7175C65.3614 68.0736 63.5738 68.7797 60.9061 69.1383C58.224 69.4989 54.7282 69.5 50 69.5H0.5V0.5Z" fill="#F28F3E"></path>
                                        <path data-v-5333fc61="" d="M33.75 43.75C39.2728 43.75 43.75 39.2728 43.75 33.75C43.75 28.2272 39.2728 23.75 33.75 23.75C28.2272 23.75 23.75 28.2272 23.75 33.75C23.75 39.2728 28.2272 43.75 33.75 43.75Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path data-v-5333fc61="" d="M46.25 46.25L40.8125 40.8125" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path data-v-5333fc61="" d="M0.5 0.5H50C54.7282 0.5 58.224 0.501062 60.9061 0.861658C63.5738 1.22032 65.3614 1.9264 66.7175 3.28249C68.0736 4.63857 68.7797 6.42621 69.1383 9.09391C69.4989 11.776 69.5 15.2718 69.5 20V50C69.5 54.7282 69.4989 58.224 69.1383 60.9061C68.7797 63.5738 68.0736 65.3614 66.7175 66.7175C65.3614 68.0736 63.5738 68.7797 60.9061 69.1383C58.224 69.4989 54.7282 69.5 50 69.5H0.5V0.5Z" stroke="#F28F3E"></path>
                                    </svg>
                                </button>
                            </div> <!---->
                        </div>
                    </div>
                </div> <!---->
                <div data-v-51576258="" class="right"><!---->
                    <div data-v-51576258="" class="header-search-icon mr0"><svg data-v-51576258="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path data-v-51576258="" d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path data-v-51576258="" d="M18.9999 19L14.6499 14.65" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></div>
                    <div data-v-51576258="" class="header-lang">
                        <div data-v-821f6b8e="" data-v-51576258="" class="lang-switcher">
                            <div data-v-821f6b8e="" class="lang-globe">
                                <svg data-v-821f6b8e="" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path data-v-821f6b8e="" d="M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21Z" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-821f6b8e="" d="M1 11H21" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path data-v-821f6b8e="" d="M11 1C13.5013 3.73835 14.9228 7.29203 15 11C14.9228 14.708 13.5013 18.2616 11 21C8.49872 18.2616 7.07725 14.708 7 11C7.07725 7.29203 8.49872 3.73835 11 1V1Z" stroke="#23303D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div data-v-821f6b8e="" class="lang-short-name"><span data-v-821f6b8e="">en</span></div>
                            <div data-v-821f6b8e="" class="lang-dropdown">
                                <div data-v-821f6b8e="" class="lang-item">
                                    Russian
                                </div>
                                <div data-v-821f6b8e="" class="lang-item">
                                    Ukrainian
                                </div>
                                <div data-v-821f6b8e="" class="lang-item">
                                    Polish
                                </div>
                                <div data-v-821f6b8e="" class="lang-item">
                                    Deutsch
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-51576258="" class="auth-links">
                        <a data-v-51576258="" href="https://jobitt.com/login" class="btn-dark signin-link">Sign in</a>
                        <a data-v-51576258="" href="https://jobitt.com/register" class="btn-black signup-link">
                            Sign up
                        </a></div> <!---->
                </div>
                <div data-v-51576258="" class="header-menu">
                    <div data-v-dfd6d346="" data-v-51576258="" class="mega-menu">
                        <div data-v-dfd6d346="" class="mobile">
                            <div data-v-dfd6d346="" class="mobile-nav-container">
                                <div data-v-dfd6d346="" class="mobile-back">
                                    Job openings
                                </div>
                                <div data-v-dfd6d346="" class="mobile-title"><a data-v-dfd6d346="" href="https://jobitt.com//job-openings" class="btn-black">View all</a></div>
                            </div>
                            <ul data-v-dfd6d346="" class="mobile-categories">
                                <li data-v-dfd6d346="" class="active">
                                    Development
                                </li>
                                <li data-v-dfd6d346="" class="">
                                    Technical
                                </li>
                                <li data-v-dfd6d346="" class="">
                                    Other
                                </li>
                            </ul>
                        </div>
                        <div data-v-dfd6d346="" id="mega-menu-title" class="mega-menu-col mega-menu-title-bar" style="padding-top: 50px;">
                            <div data-v-dfd6d346="" class="mega-menu-title"><a data-v-dfd6d346="" href="https://jobitt.com//job-openings">Job
                                    openings</a></div>
                            <div data-v-dfd6d346="" class="mega-menu-button"><a data-v-dfd6d346="" href="https://jobitt.com//job-openings" class="btn-black">View all</a></div>
                        </div>
                        <div data-v-dfd6d346="" class="mega-menu-content">
                            <div data-v-dfd6d346="" id="development-items" class="mega-menu-col active">
                                <div data-v-dfd6d346="" class="mega-menu-col-title">
                                    Development
                                </div>
                                <div data-v-dfd6d346="" class="mega-menu-list">
                                    <div data-v-dfd6d346="" class="row">
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com//job-openings/dev/c-sharp" class="nuxt-link-exact-active nuxt-link-active" aria-current="page">C#
                                                /.NET</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/c" class="">C / C++ /
                                                Embedded</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/frontend" class="">Front-End / JS</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/golang" class="">Golang</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/ios" class="">IOS</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/java" class="">Java</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/node" class="">Node.js</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/php" class="">PHP</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/python" class="">Python</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/dev/flutter" class="">Flutter</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/ruby" class="">Ruby</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/android" class="">Android</a></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-dfd6d346="" id="technical-items" class="mega-menu-col active">
                                <div data-v-dfd6d346="" class="mega-menu-col-title">
                                    Technical
                                </div>
                                <div data-v-dfd6d346="" class="mega-menu-list">
                                    <div data-v-dfd6d346="" class="row">
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/business" class="">Business Analyst</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/data-science" class="">Data Science</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/data-analyst" class="">Data Analyst</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/data-engineer" class="">Data Engineer</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/devops" class="">DevOps</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/design" class="">Design / UI/UX</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/illustrator" class="">2D/3D Artist /
                                                Illustrator</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/gamedev" class="">Gamedev / Unity</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/lead" class="">Lead / Architect /
                                                CTO</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/product-manager" class="">Product Manager</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/project-manager" class="">Project Manager</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/scrum-master" class="">Scrum Master / Agile
                                                Coach</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/qa-automation" class="">QA Automation</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/qa-manual" class="">QA Manual</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/sql" class="">SQL / DBA</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/security" class="">Security</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/seo" class="">SEO</a></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-dfd6d346="" id="other-items" class="mega-menu-col active">
                                <div data-v-dfd6d346="" class="mega-menu-col-title">Other</div>
                                <div data-v-dfd6d346="" class="mega-menu-list">
                                    <div data-v-dfd6d346="" class="row">
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/search/marketing" class="">Marketing</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/hr" class="">HR / Recruiters</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/sales" class="">Sales</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/technical-support" class="">Customer / Technical
                                                Support</a></div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/lead-generation" class="">Lead Generation</a>
                                        </div>
                                        <div data-v-dfd6d346="" class="col-6 col-lg-2"><a data-v-dfd6d346="" href="https://jobitt.com/job-openings/technical/ppc" class="">PPC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div data-v-51576258="" class="header-additional-menu with-info-block">
                <ul data-v-51576258="" class="main-menu">
                    <li data-v-51576258=""><a data-v-51576258="" class="">Job openings</a></li>
                    <li data-v-51576258=""><a data-v-51576258="" href="https://jobitt.com/candidates" class=""> All Candidates&nbsp;
                            <!----></a></li>
                    <li data-v-51576258=""><a data-v-51576258="" href="https://jobitt.com/resume-builder" class=""> Resume Builder&nbsp;
                            <!----></a></li>
                    <li data-v-51576258="">
                        <a data-v-51576258="" href="https://jobitt.com/blog" class=""> Blog&nbsp;<!----></a>
                    </li>
                    <li data-v-51576258="">
                        <a data-v-51576258="" href="https://jobitt.com/companies" class=""> Companies&nbsp;<!----></a>
                    </li>
                </ul>
                <a data-v-51576258="" href="https://t.me/JOBITT_Ukraine" target="_blank" class="header-additional-menu-telegram">
                    Telegram channel
                    <span data-v-51576258=""><img data-v-51576258="" src="{{asset('img/telegram.1ac36d5.svg')}}" alt="telegram"></span></a>
            </div>
        </div> <!---->
    </div>
    <div data-v-51576258="" class="search-mobile">
        <div data-v-5333fc61="" data-v-51576258="" class="search-wrapper" id="header-search-top-mobile" headerheight="392">
            <div data-v-5333fc61="" class="search-group"><input data-v-5333fc61="" type="text" name="search_input" placeholder="e.g. Web developer, UI/UX Designer etc." class="search-input" spellcheck="false" data-ms-editor="true"> <!---->
                <button data-v-5333fc61="" class="search-button">
                    <svg data-v-5333fc61="" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path data-v-5333fc61="" d="M0.5 0.5H50C54.7282 0.5 58.224 0.501062 60.9061 0.861658C63.5738 1.22032 65.3614 1.9264 66.7175 3.28249C68.0736 4.63857 68.7797 6.42621 69.1383 9.09391C69.4989 11.776 69.5 15.2718 69.5 20V50C69.5 54.7282 69.4989 58.224 69.1383 60.9061C68.7797 63.5738 68.0736 65.3614 66.7175 66.7175C65.3614 68.0736 63.5738 68.7797 60.9061 69.1383C58.224 69.4989 54.7282 69.5 50 69.5H0.5V0.5Z" fill="#F28F3E"></path>
                        <path data-v-5333fc61="" d="M33.75 43.75C39.2728 43.75 43.75 39.2728 43.75 33.75C43.75 28.2272 39.2728 23.75 33.75 23.75C28.2272 23.75 23.75 28.2272 23.75 33.75C23.75 39.2728 28.2272 43.75 33.75 43.75Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path data-v-5333fc61="" d="M46.25 46.25L40.8125 40.8125" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path data-v-5333fc61="" d="M0.5 0.5H50C54.7282 0.5 58.224 0.501062 60.9061 0.861658C63.5738 1.22032 65.3614 1.9264 66.7175 3.28249C68.0736 4.63857 68.7797 6.42621 69.1383 9.09391C69.4989 11.776 69.5 15.2718 69.5 20V50C69.5 54.7282 69.4989 58.224 69.1383 60.9061C68.7797 63.5738 68.0736 65.3614 66.7175 66.7175C65.3614 68.0736 63.5738 68.7797 60.9061 69.1383C58.224 69.4989 54.7282 69.5 50 69.5H0.5V0.5Z" stroke="#F28F3E"></path>
                    </svg>
                </button>
            </div> <!---->
        </div>
    </div>
</div>
<main>
    <section class="statistics">
        <ul data-v-6977ea14="" class="breadcrumb">
            <li>
                <a href="https://jobitt.com/" class="nuxt-link-active">Home</a>
                @if(isset($selected_position)) <span>/</span> @endif
            </li>
            @if(isset($selected_position))
                <li>
                    <a href="{{route('salaries', ['position' => $selected_position])}}" class="@if(isset($selected_technology)) nuxt-link-active @else breadcrumb-latest @endif">{{$selected_position}}</a>
                    @if(isset($selected_technology)) <span>/</span> @endif
                </li>
            @endif
            @if(isset($selected_technology))
                <li>
                    <span class="breadcrumb-latest">{{$selected_technology}}</span>
                </li>
            @endif
        </ul>
        <div id="db-header">
            <h1>{!! $page?->h1 !!}</h1>
            <div class="lead">
                {!! $page?->content !!}
            </div>

            <div id="salary-facts">
                <h4>What are the salary ranges in the tech industry?</h4>
                <div id="salary-facts-blocks">
                    @foreach($salary_ranges as $title=>$salary_sample)
                        <a class="salary-fact" href={{"/salaries".(isset($selected_position)?"?position=".\App\Services\LinkTransformService::transformPositionName($selected_position): "")}}>
                            <span class="sf-name">{{$title}}</span>
                            <span class="sf-value">{{$salary_sample}} NIS</span>
                        </a>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="statistics__inputs">
            <div class="statistics__inputs__input_container">
                <label for="position_select">Position</label>
                <select name="position" id="position_select">
                    <option value="">All</option>
                    @foreach($positions as $position)
                        <option value="{{\App\Services\LinkTransformService::transformPositionName($position)}}" @if($position===$selected_position) selected @endif>{{$position}}</option>
                    @endforeach
                </select>
            </div>
            @if(isset($selected_position))
                <div class="statistics__inputs__input_container">
                    <label for="technology_select">Technology</label>
                    <select name="technology" id="technology_select">
                        <option value="">All</option>
                        @foreach($technologies as $technology)
                            <option value="{{\App\Services\LinkTransformService::transformPositionName($technology)}}" @if(isset($selected_technology) && $technology===$selected_technology) selected @endif>{{$technology}}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="statistics__inputs__input_container">
                <label for="city_select">Region</label>
                <select name="location" id="city_select">
                    <option selected value="">All</option>
                    @foreach($location_options as $idx => $location_name)
                        <option @if(isset($selected_location) && $selected_location===$location_name) selected @endif value="{{$idx}}">{{$location_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="statistics__inputs__input_container">
                <label for="seniority_select">Seniority</label>
                <select name="seniority" id="seniority_select">
                    <option selected value="">All</option>
                    @foreach($seniority_options as $idx => $seniority)
                        <option @if(isset($selected_seniority) && $selected_seniority===$seniority) selected @endif value="{{$idx}}">{{$seniority}}</option>
                    @endforeach
                </select>
            </div>
            <div class="statistics__inputs__input_container">
                <label for="experience_select">Experience</label>
                <select name="experience" id="experience_select">
                    <option value="" selected>All</option>
                    @foreach($exp_options as $idx => $option_name)
                        <option @if(isset($selected_experience) && $selected_experience==$idx) selected @endif value="{{$idx}}">{{$option_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div id="db-employment">
            <div class="item active" style="padding-top: 40px">
                <div class="name">Salary statistics for this job</div>
            </div>
            <div id="db-charts">
                <div id="db-salary-summary">
                    <div class="point quartile q1">
                        <div class="name">Quartile 1</div>
                        <div class="value">
                            <span class="value-num">No data</span>
                            <span class="value-unit"> NIS</span>
                        </div>
                    </div>
                    <div class="point median">
                        <div class="name">Median</div>
                        <div class="value"><span class="value-num">No data</span><span class="value-unit"> NIS</span></div>
                    </div>
                    <div class="point quartile q3">
                        <div class="name">Quartile 3</div>
                        <div class="value"><span class="value-num">No data</span><span class="value-unit"> NIS</span></div>
                    </div>
                </div>
                <div id="db-chart"></div>
            </div>
            <div id="db-chart-text">
                <p style="width: 100%">
                    {!! $page?->additional_content !!}
                </p>
            </div>
            <section id="faq-section">
                <h2>FAQ</h2>
                @if($page->route_name === \App\Models\EditPage::MAIN_PAGE)
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span>What is the average salary of high-tech in Israel, 2023?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Based on our survey of <span class="number_respondents"></span>, the average salary in high-tech is <span class="mean_salary"></span>, with regional variations.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span> What are the common benefits in high-tech jobs in Israel?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Key benefits include <span class="top_three_benefits"></span>, as reported by <span class="number_respondents"></span>.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span> How does gender affect salary in high-tech?
                            </span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Gender pay disparity exists, with
                            {{(array_key_exists('Male', $job_statistics['Gender'])? $job_statistics['Gender']['Male']: 0).' NIS of Males and '.(array_key_exists('Female', $job_statistics['Gender'])? $job_statistics['Gender']['Female']: 0).' NIS of Females'}} in high-tech roles.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span>Which regions in Israel offer the highest salaries of high-tech?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Salaries are highest in regions like {{array_key_last($job_statistics['Location'])}}, with an average of {{$job_statistics['Location'][array_key_last($job_statistics['Location'])]}} NIS.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span>How does experience level impact high-tech salaries in Israel?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Experience significantly influences earnings. Professionals with {{$job_statistics['Experience']['exp_name']}} of experience average around {{$job_statistics['Experience']['min']}} NIS and {{$job_statistics['Experience']['max']}} NIS.
                        </p>
                    </div>
                @else
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span>What is the average salary in high-tech{!!(' for <span class="field_text"></span>')!!} in Israel, 2023?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Based on our survey of <span class="number_respondents"></span>, the average salary in <span class="field_text"></span> is <span class="mean_salary"></span>, with regional variations.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span> What are the common benefits in high-tech jobs in <span class="field_text"></span>?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Key benefits include <span class="top_three_benefits"></span>, as reported by <span class="number_respondents"></span>.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span> How does gender affect salary in high-tech for <span class="field_text"></span>?
                            </span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Gender pay disparity exists, with
                            {{(array_key_exists('Male', $job_statistics['Gender'])? $job_statistics['Gender']['Male']: 0).' NIS of Males and '.(array_key_exists('Female', $job_statistics['Gender'])? $job_statistics['Gender']['Female']: 0).' NIS of Females'}} in roles like <span class="field_text"></span>.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span>Which regions in Israel offer the highest salaries in high-tech for <span class="field_text"></span>?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Salaries are highest in regions like {{array_key_last($job_statistics['Location'])}}, with an average of {{$job_statistics['Location'][array_key_last($job_statistics['Location'])]}} NIS.
                        </p>
                    </div>
                    <div class="accordion_item">
                        <button class="accordion_btn">
                            <span>How does experience level impact high-tech salaries in <span class="field_text"></span>?</span>
                            <span class="accordion_btn__after">+</span>
                        </button>
                        <p class="accordion_text">
                            Experience significantly influences earnings. Professionals with {{$job_statistics['Experience']['exp_name']}} of experience average around {{$job_statistics['Experience']['min']}} NIS and {{$job_statistics['Experience']['max']}} NIS.
                        </p>
                    </div>
                @endif
            </section>
        </div>
    </section>
    <section data-v-0975d947="" class="footer-section">
        <div data-v-0975d947="" class="container">
            <div data-v-0975d947="" class="footer-left">
                <div data-v-0975d947="" class="categories-group">
                    <div data-v-0975d947="" class="categories-col">
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings" class="footer-title">IT Jobs</a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/web" class="categories-item"> Web Development </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/design" class="categories-item"> UI/UX Design </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/ruby" class="categories-item"> Ruby </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/python" class="categories-item"> Python </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/marketing" class="categories-item"> Marketing </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/qa" class="categories-item"> QA </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/mobile" class="categories-item"> Mobile Apps </a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/search/android" class="categories-item"> Android Apps </a>
                    </div>
                    <div data-v-0975d947="" class="categories-col">
                        <a data-v-0975d947="" href="https://jobitt.com/candidates" class="footer-title">Candidates</a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/web" class="categories-item"> Web Development </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/design" class="categories-item"> UI/UX Design </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/ruby" class="categories-item"> Ruby </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/python" class="categories-item"> Python </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/marketing" class="categories-item"> Marketing </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/qa" class="categories-item"> QA </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/mobile" class="categories-item"> Mobile Apps </a>
                        <a data-v-0975d947="" href="https://jobitt.com/candidates/search/android" class="categories-item"> Android Apps </a>
                    </div>
                </div>
            </div>
            <div data-v-0975d947="" class="footer-right">
                <div data-v-0975d947="" class="categories-group">
                    <div data-v-0975d947="" class="categories-col">
                        <div data-v-0975d947="" class="footer-title">About us</div>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/blog" class="categories-item">Blog</a>
                        <a data-v-0975d947="" href="https://jobitt.com/job-openings/sitemap" class="categories-item">Sitemap</a>
                        <a data-v-0975d947="" href="https://jobitt.com/" class="categories-item orange">Contact us</a>
                    </div>
                    <div data-v-0975d947="" class="categories-col">
                        <a data-v-0975d947="" href="job-openings/companies" class="footer-title">Companies</a>
                    </div>
                </div>
                <div data-v-0975d947="" class="about-group">
                    <div data-v-0975d947="" class="about-item">
                        <div data-v-0975d947="" class="about-item-title">Anonymous IT job search:</div>
                        <img data-v-0975d947="" src="{{asset('img/header-logo.svg')}}" alt="Jobitt" loading="lazy" sizes="145px" srcset="{{asset('img/header-logo.svg')}} 145w" class="about-item-logo">
                        <div data-v-0975d947="" class="about-item-status">You are here</div>
                    </div>
                    <div data-v-0975d947="" class="about-item">
                        <div data-v-0975d947="" class="about-item-title">TOP companies for your next project:</div>
                        <img data-v-0975d947="" src="{{asset('img/coditt-logo.svg')}}" alt="CoDitt" loading="lazy" sizes="145px" srcset="{{asset('img/coditt-logo.svg')}} 145w" class="about-item-logo">
                        <a data-v-0975d947="" target="_blank" href="https://www.coditt.com/" class="about-item-status link">go to CoDitt</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="tooltip">
        <div class="tt-name">48k+</div>
        <div class="tt-value">3.4%</div>
        <div class="tt-answers">21 odpowiedź</div>
    </div>
</main>
<footer>
    <p><span class="footer-copyright">© jobitt 2023</span><span class="footer-rights">. All rights reserved</span></p>
    <p class="footer-terms"><a href="https://jobitt.com/rules" class="">Terms of Payment</a>
        |
        <a href="https://jobitt.com/agreement" class="">Privacy policy</a>
        |
        <a href="https://jobitt.com/outstaffing" class="">Terms of outstaffing</a>
    </p>
</footer>
<script type="module">
    const width = window.innerWidth;
    let height = 850;
    if (window.innerWidth < 968) {
        height = 500;
    }
    const marginTop = 20;
    const marginRight = 0;
    const marginBottom = 30;
    const marginLeft = 40;
    const tooltipPadding = 5;

    function clickOutsideSearch(ev) {
        if (!document.querySelector('.search-mobile').contains(ev.target) && document.querySelector('.header-search-icon').contains(ev.target)) {
            document.body.removeEventListener('click', clickOutsideSearch);
            document.querySelector('.search-mobile').classList.toggle('active')

        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('#db-employment .item').forEach((el) => {
            el.addEventListener('click', function(ev) {
                document.querySelector('#db-employment .item.active').classList.remove('active');
                ev.currentTarget.classList.add('active');
            })
        });
        document.querySelector('.header-search-icon').addEventListener('click', function() {
            document.querySelector('.search-mobile').classList.toggle('active')
            // document.body.addEventListener('click', clickOutsideSearch);

        })
        document.querySelector('.header-lang').addEventListener('click', () => {
            document.querySelector('.lang-dropdown').classList.toggle('active')
        })
        document.querySelector('.search-group .search-input').addEventListener('keyup', function(e) {
            if (e.currentTarget.value === '') {
                return
            }
            if (e.key === 'Enter' || e.keyCode === 13) {
                location.href = "https://jobitt.com/job-openings?search=" + e.currentTarget.value;
            }
        });
        document.querySelector('.search-mobile .search-button').addEventListener('click', () => {
            location.href = "https://jobitt.com/job-openings?search=" + document.querySelector('.search-mobile .search-input').value;
        })
        document.querySelector('#header-el > div.left > div.menu > div > ul > li:nth-child(1) > a').addEventListener('click', (ev) => {
            document.querySelector('.sub-menu.show').classList.toggle('show-mega-menu');
            document.querySelector('.sub-menu .mega-menu').classList.toggle('active');
        })
        document.querySelector('.is-menu').addEventListener('click', function() {
            document.querySelector('.sub-menu').classList.toggle('show');
            document.querySelector('.page-header').classList.toggle('page-header-fixed-pos');
        });
        document.querySelector('.mobile-back').addEventListener('click', () => {
            document.querySelector('.sub-menu.show').classList.toggle('show-mega-menu');
            document.querySelector('.sub-menu .mega-menu').classList.toggle('active');
        })
        document.querySelectorAll('.statistics__inputs__input_container select').forEach(
            (el) => {
                el.addEventListener('change', function(ev) {
                    let new_url = '/salaries/Israel/' + document.getElementById("position_select").value;
                    let technology = document.getElementById("technology_select")?.value;
                    if (technology !== '' && (typeof technology === 'string') && ev.currentTarget.id !== 'position_select') {
                        new_url += ('/' + technology);
                    }
                    let url_parts = ['position_select', 'technology_select'];
                    let selects = document.querySelectorAll('.statistics__inputs__input_container select');
                    let added_select_idx = 0;
                    selects.forEach((el, idx) => {
                        if (!url_parts.includes(el.id) && el.value !== '') {
                            if (added_select_idx === 0) {
                                new_url += '?';
                            } else {
                                new_url += '&';
                            }
                            new_url += (el.name + '=' + el.value);
                            added_select_idx++;
                        }
                    })
                    location.href = new_url;
                });
            }
        )
        fetchData();
        initAccordion();
    })

    function initAccordion() {
        document.querySelectorAll('.accordion_btn').forEach((el) => {
            el.addEventListener('click', () => {
                el.parentElement.classList.toggle('active');
                if (el.parentElement.classList.contains('active')) {
                    el.querySelector('.accordion_btn__after').innerText = '-';
                } else {
                    el.querySelector('.accordion_btn__after').innerText = '+';
                }
            })
        })
    }

    function prepareData(rowData) {
        const groupData = d3.group(rowData, (sample) => sample['Salary Range']);
        let preparedData = [];
        groupData.forEach((sample, key) => {
            preparedData.push({
                'count': sample.length,
                'range': key,
                'percent': (sample.length / rowData.length * 100).toFixed(2) + '%'
            })
        })
        return preparedData;
    }

    function plotSallaryChart(data) {
        // Declare the x (horizontal position) scale.
        const x = d3.scaleBand()
            .domain(d3.groupSort(data, ([d]) => d.range, (d) => d.range)) // descending frequency
            .range([marginLeft, width - marginRight])
            .padding(0.1);

        // Declare the y (vertical position) scale.
        const y = d3.scaleLinear()
            .domain([0, d3.max(data, (d) => d.count)])
            .range([height - marginBottom, marginTop]);

        // Create the SVG container.
        const svg = d3.create("svg")
            .attr("width", width)
            .attr("height", height)
            .attr("viewBox", [0, 0, width, height])
            .attr("style", "max-width: 100%; height: auto;");

        // Add a rect for each bar.
        svg.append("g")
            .attr("fill", "#f5750c")
            .selectAll()
            .data(data)
            .join("rect")
            .attr("x", (d) => x(d.range))
            .attr("y", (d) => y(0))
            .attr("data-range", (d) => d.range)
            .attr("data-count", (d) => d.count)
            .attr("data-percent", (d) => d.percent)
            .attr("height", d => height - y(0) - marginBottom)
            .attr("width", x.bandwidth())
            .append("svg:title")
            .text((d) => d.count);

        const tooltip = document.getElementById("tooltip");

        svg.selectAll('rect')
            .transition()
            .delay(200)
            .attr("y", (d) => y(d.count))
            .attr("height", d => height - y(d.count) - marginBottom)
            .duration(500);

        svg.selectAll('rect')
            .on("mouseover", function(d) {
                // console.log(d.target.getBoundingClientRect());
                let element = d.target.getBoundingClientRect();
                tooltip.style.top = (element.y + window.scrollY - tooltip.getBoundingClientRect().height - tooltipPadding) + "px";
                tooltip.style.left = element.left + "px";
                tooltip.style.width = element.width + "px";
                tooltip.style.visibility = "visible";
                tooltip.querySelector('.tt-name').innerText = d.target.dataset.range;
                tooltip.querySelector('.tt-value').innerText = d.target.dataset.percent;
                tooltip.querySelector('.tt-answers').innerText = d.target.dataset.count + " responses";
            })
            // .on("mousemove", function(){ console.log('test'); return tooltip.style("top", "200px").style("left",(d3.event.pageX+10)+"px");})
            .on("mouseout", function() {
                tooltip.style.visibility = "hidden";
            });

        // Add the x-axis and label.
        svg.append("g")
            .attr("transform", `translate(0,${height - marginBottom})`)
            .attr("style", "font-size: 24px; font-weight: 600")
            .call(g => g.select(".domain").remove())
            .call(d3.axisBottom(x).tickSizeOuter(0));

        // Return the SVG element.
        const div = document.querySelector("#db-chart");
        div.innerHTML = "";
        div.append(svg.node());
    }

    function mostFrequent(data, key) {
        let biggestFrequency = {
            'name': null,
            'count': 0
        }
        let secondFrequency = {
            'name': null,
            'count': 0
        }
        let thirdFrequency = {
            'name': null,
            'count': 0
        }
        let frequencies = {};
        data.forEach((el) => {
            let list_benefits = el[key].split(',')
            list_benefits.forEach((benefit) => {
                benefit = benefit.trim();
                if (!frequencies.hasOwnProperty(benefit)) {
                    frequencies[benefit] = 0;
                }
                frequencies[benefit] += 1;
                if (frequencies[benefit] > biggestFrequency.count) {
                    biggestFrequency.name = benefit;
                    biggestFrequency.count += 1;
                } else if (frequencies[benefit] > secondFrequency.count) {
                    secondFrequency.name = benefit;
                    secondFrequency.count += 1;
                } else if (frequencies[benefit] > thirdFrequency.count) {
                    thirdFrequency.name = benefit;
                    thirdFrequency.count += 1;
                }
            })
        })
        return biggestFrequency.name + ', ' + secondFrequency.name + ', ' + thirdFrequency.name;
    }

    function fetchData() {
        let filters = document.querySelectorAll('.statistics__inputs__input_container select');
        let options = {};
        filters.forEach((filterOption) => {
            if (filterOption.value !== '') {
                options[filterOption.getAttribute('name')] = filterOption.value;
            }
        });
        $.ajax({
            url: '/api/salaries',
            data: options,
            success: (resp) => {
                let data = resp['survey_data']
                let job_name = document.querySelector('#technology_select option:checked')?.innerText;
                if (job_name === 'All') {
                    job_name = document.querySelector('#position_select option:checked')?.innerText;
                }
                document.querySelectorAll('.variable').forEach((el) => {
                    el.classList.remove('variable')
                })
                // document.querySelector('#db-header .title-underscore').innerText = job_name;
                // document.title = document.title.replace('<span class="field_text">Field_Name</span>', job_name)
                let preparedData = prepareData(data);
                let f_quantile = 0;
                let m_quantile = 0;
                let th_quantile = 0;
                const div = document.querySelector("#db-chart");
                div.innerHTML = `<div style='height: ${height}px'>
                        <p style="font-weight: 600; font-size: 24px">Not enough data to display</p>
                    </div>`;
                if (preparedData.length !== 0) {
                    f_quantile = d3.quantile(data.map((data) => data['Salary (₪)']), .25);
                    m_quantile = d3.quantile(data.map((data) => data['Salary (₪)']), .5);
                    th_quantile = d3.quantile(data.map((data) => data['Salary (₪)']), .75);
                    plotSallaryChart(preparedData);
                }
                else {
                    document.querySelector('#db-chart > div').style.height = '50px';
                }
                document.querySelector('.q1 .value-num').innerText = f_quantile;
                document.querySelector('.median .value-num').innerText = m_quantile;
                document.querySelector('.q3 .value-num').innerText = th_quantile;
                document.querySelector('#db-employment .value-num').innerText = m_quantile;
                for (const selector in resp['stats']) {
                    let value = resp['stats'][selector];
                    document.querySelectorAll('.' + selector).forEach((el) => {
                        el.innerText = value;
                    })
                }
            }
        })
    }
</script>
</body>

</html>
