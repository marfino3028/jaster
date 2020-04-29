@section('title', 'Add Progress')

@section('csslibraries')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Order Progress</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Progress</a></div>
        <div class="breadcrumb-item active"><a href="#">Edit Progress</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Order Progress</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="section-title mt-0">Setup</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="gmail">
                      <label class="custom-control-label" for="gmail">Buat Gmail</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="buyDomain">
                      <label class="custom-control-label" for="buyDomain">Beli Domain</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="nameServer">
                      <label class="custom-control-label" for="nameServer">Setting NameServer</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="addToHosting">
                      <label class="custom-control-label" for="addToHosting">Add Domain to Hosting</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="setSsl">
                      <label class="custom-control-label" for="setSsl">Setting SSL Certificate</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="buildWithSoftaculus">
                      <label class="custom-control-label" for="buildWithSoftaculus">Build WordPress with Softaculus</label>
                    </div>
                    <div class="section-title mt-0">WordPress Setting</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="createHome">
                      <label class="custom-control-label" for="createHome">Create new Page 'Home'</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="setTimeZone">
                      <label class="custom-control-label" for="setTimeZone">Set TimeZone to Indonesia</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="setHome">
                      <label class="custom-control-label" for="setHome">Set Front Page to 'Home'</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="uncropThumbnail">
                      <label class="custom-control-label" for="uncropThumbnail">Uncheck crop Thumbnail on Media Setting</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="setPermalinks">
                      <label class="custom-control-label" for="setPermalinks">Set Permalinks</label>
                    </div>
                    <div class="section-title mt-0">Install Plugins & Theme</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="wpSuperCache">
                      <label class="custom-control-label" for="wpSuperCache">WP Super Cache and Setting</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="AioSEO">
                      <label class="custom-control-label" for="AioSEO">All in One SEO and Setting</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementor">
                      <label class="custom-control-label" for="elementor">Elementor and Setting</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="gadwp">
                      <label class="custom-control-label" for="gadwp">Google Analytics Dashboard WP</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="wpsHideLogin">
                      <label class="custom-control-label" for="wpsHideLogin">WPS Hide Login and Setting</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="oceanWp">
                      <label class="custom-control-label" for="oceanWp">OceanWP Theme</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="section-title mt-0">Proses</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="konsep">
                      <label class="custom-control-label" for="konsep">Concept</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="gettingData">
                      <label class="custom-control-label" for="gettingData">Data Website</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="colorStyling">
                      <label class="custom-control-label" for="colorStyling">Setting General and Secondary Color</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="fontStyling">
                      <label class="custom-control-label" for="fontStyling">Setting Heading and Body Fonts</label>
                    </div>
                    <div class="section-title mt-0">OceanWP HomePage Styling</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="stylingTopBar">
                      <label class="custom-control-label" for="stylingTopBar">Styling TopBar</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="stylingHeader">
                      <label class="custom-control-label" for="stylingHeader">Styling Header</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="stylingFooter">
                      <label class="custom-control-label" for="stylingFooter">Styling Footer</label>
                    </div>
                    <div class="section-title mt-0">Elementor HomePage Styling</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementorHeader">
                      <label class="custom-control-label" for="elementorHeader">Header Section</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementorHeaderImage">
                      <label class="custom-control-label" for="elementorHeaderImage">Header Image</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementorAbout">
                      <label class="custom-control-label" for="konsep">About us Section</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementorAboutImage">
                      <label class="custom-control-label" for="elementorAboutImage">About us Image</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementorProductService">
                      <label class="custom-control-label" for="elementorProductService">Service or Product Section</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="elementorCall">
                      <label class="custom-control-label" for="elementorCall">Click to Action or Call Section</label>
                    </div>
                    <div class="section-title mt-0">Other Pages</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="pageAbout">
                      <label class="custom-control-label" for="pageAbout">About us Page</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="pageAboutArticle">
                      <label class="custom-control-label" for="pageAboutArticle">About us Article</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="pageContact">
                      <label class="custom-control-label" for="pageContact">Contact us Page</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="pageContactContent">
                      <label class="custom-control-label" for="pageContactContent">Contact us Content</label>
                    </div>
                </div>
                <div class="col-4">
                <div class="section-title mt-0">Finishing</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="recheckPage">
                      <label class="custom-control-label" for="recheckPage">Re-Check Page</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="widgetTest">
                      <label class="custom-control-label" for="widgetTest">Widget test</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="appreanceCorrection">
                      <label class="custom-control-label" for="appreanceCorrection">Appreance Correction</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="poles">
                      <label class="custom-control-label" for="poles">Poles</label>
                    </div>
                    <div class="section-title mt-0">Documentation</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="docSpeed">
                      <label class="custom-control-label" for="docSpeed">Speed</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="docMobileFriendly">
                      <label class="custom-control-label" for="docMobileFriendly">Mobile Friendly</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="docFBShare">
                      <label class="custom-control-label" for="docFBShare">FB Share</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="docResponsive">
                      <label class="custom-control-label" for="docResponsive">Responsive</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="docGoogleSearch">
                      <label class="custom-control-label" for="docGoogleSearch">Google Search index</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="docSEOResult">
                      <label class="custom-control-label" for="docSEOResult">SEO Result</label>
                    </div>
                    <div class="section-title mt-0">File Order</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="lampiranOrder">
                      <label class="custom-control-label" for="lampiranOrder">Lampiran Order</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="lampiranAkunText">
                      <label class="custom-control-label" for="lampiranAkunText">Akun Text</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="lampiranAkunGambar">
                      <label class="custom-control-label" for="lampiranAkunGambar">Akun Image</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="lampiranInvoice">
                      <label class="custom-control-label" for="lampiranInvoice">Invoice</label>
                    </div>
                    <div class="section-title mt-0">Backup</div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="backupWeb">
                      <label class="custom-control-label" for="backupWeb">Web Backup</label>
                    </div>
                    <div class="custom-control custom-checkbox checkbox-margin">
                      <input type="checkbox" class="custom-control-input" id="backupCSS">
                      <label class="custom-control-label" for="backupCSS">CSS Backup</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection