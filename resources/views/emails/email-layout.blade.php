<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta charset="utf-8">
<!-- utf-8 works for most cases -->
<meta name="viewport" content="width=device-width">
<!-- Forcing initial-scale shouldn't be necessary -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Use the latest (edge) version of IE rendering engine -->
<meta name="x-apple-disable-message-reformatting">
<!-- Disable auto-scale in iOS 10 Mail entirely -->
<title>Accounting</title>
<!-- The title tag shows in email notifications, like Android 4.4. -->

<!-- Web Font / @font-face : BEGIN -->
<!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
<!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
<!--[if !mso]><!-->
<!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
<!--<![endif]-->

<!-- Web Font / @font-face : END -->

<!-- CSS Reset : BEGIN -->
<style>
/* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */

html, body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
}
/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}
/* What it does: Stops Outlook from adding extra spacing to tables. */
table, td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}
/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}
table table table {
    table-layout: auto;
}
/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode: bicubic;
}
/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */ .x-gmail-data-detectors,    /* Gmail */ .x-gmail-data-detectors *, .aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}
/* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}
/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}
/* What it does: Prevents underlining the button text in Windows 10 */
.button-link {
    text-decoration: none !important;
}

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
.email-container {
    min-width: 375px !important;
}
}
 @media screen and (max-width: 480px) {
/* What it does: Forces Gmail app to display email full width */
u ~ div .email-container {
    min-width: 100vw;
    width: 100% !important;
}
}
</style>
<!-- CSS Reset : END -->

<!-- Progressive Enhancements : BEGIN -->
<style>
/* What it does: Hover styles for buttons */

.button-td, .button-a {
    transition: all 100ms ease-in;
}
.button-td:hover, .button-a:hover {
    background: #555555 !important;
    border-color: #555555 !important;
}

        /* Media Queries */
        @media screen and (max-width: 600px) {
.email-container {
    width: 100% !important;
    margin: auto !important;
}
/* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
.fluid {
    max-width: 100% !important;
    height: auto !important;
    margin-left: auto !important;
    margin-right: auto !important;
}
/* What it does: Forces table cells into full-width rows. */
.stack-column, .stack-column-center {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    direction: ltr !important;
}
/* And center justify these ones. */
.stack-column-center {
    text-align: center !important;
}
/* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
.center-on-narrow {
    text-align: center !important;
    display: block !important;
    margin-left: auto !important;
    margin-right: auto !important;
    float: none !important;
}
table.center-on-narrow {
    display: inline-block !important;
}
/* What it does: Adjust typography on small screens to improve readability */
.email-container p {
    font-size: 17px !important;
}
}
</style>
<!-- Progressive Enhancements : END -->

<!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
<!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width="100%" bgcolor="#e1e1e1" style="margin: 0; mso-line-height-rule: exactly;">
<center style="width: 100%; background: #ffffff; text-align: left;">
 <!-- Visually Hidden Preheader Text : BEGIN -->
  <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;"></div>
  <!-- Visually Hidden Preheader Text : END -->

  <!-- Email Header : BEGIN -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
    <tr>
      <td style="padding: 20px 0; text-align: center"><img src="{{ asset('public/uploads/emails/3d.png') }}" width="370" height="81" alt="alt_text" border="0" style="height: auto;line-height: 140%; color: #555555;"></td>
    </tr>
  </table>
  <!-- Email Header : END -->

  <!-- Email Body : BEGIN -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">

    <!-- Hero Image, Flush : BEGIN -->
    <tr>
      <td bgcolor="#ffffff" align="center"><img src="{{ asset('public/uploads/emails/banner.jpg') }}" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; margin: auto;" class="g-img"></td>
    </tr>
    <!-- Hero Image, Flush : END -->
    <!-- 1 Column Text + Button : BEGIN -->

            @yield('content')

            With our best regards,<br><br>
          <strong> Accounting </strong><br><br>

        <i>IMPORTANT: The contents of this email and any attachments are confidential. They are intended for the named recipient(s) only. If you have received this email by mistake, please notify the sender immediately and do not disclose the contents to anyone or make copies thereof.</i>
        </p></td>
    </tr>

    <!-- 1 Column Text + Button : END -->
  </table>
  <!-- Email Body : END -->
  <!-- Email Footer : BEGIN -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
  </table>
  <!-- Email Footer : END -->

</center>
</body>
</html>