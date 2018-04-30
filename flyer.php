<?php
require 'databaseConnection.php';

$dbConn = getConnection();
$sql = "SELECT * FROM comminfo";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RE/MAX Salinas | Sales Breakdown</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- BEGIN TEMPLATE default-css.php INCLUDE -->
        <?php include "./templates-admin/default-css.php" ?>
        <!-- END TEMPLATE default-css.php INCLUDE -->
        <!-- PAGE-SPECIFIC CSS -->
        <style>
       

                iframe,
                .no_iframe {
                    width:100%;
                    height:400px;
                    border:1px solid #666;
                    background-color: #ddd;
                }

                .no_iframe {
                   > div {
                        //margin:0 .3em;
                        width:80%;
                        position: absolute;
                        top:50%;
                        left:50%;
                        transform: translate(-50%, -50%);
                        font-weight: normal;
                    }
                }

                @media all and (min-width:768px) {
                   .btn.btn-block {
                        display: inline;
                        width: auto;
                    }
                }
            }
        </style>

    </head>

    <body class="hold-transition skin-red-light sidebar-mini">
        <!-- Site Wrapper -->
        <div class="wrapper">
            <!-- BEGIN TEMPLATE header.php INCLUDE -->
            <?php include "./templates-admin/header.php" ?>
            <!-- END TEMPLATE header.php INCLUDE -->

            <!-- BEGIN TEMPLATE nav.php INCLUDE -->
            <?php include "./templates-admin/nav.php" ?>
            <!-- END TEMPLATE nav.php INCLUDE -->

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Flyer
                    </h1>

                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                        <h1>Flyer Builder</h1>

                                        <div class="row">
                                            <div class="col-sm-6 loc_form">

                                                <div class="form-group">
                                                    <label for="flyer-image" class="control-label">Image</label>
                                                    <input id="flyer-image" type="file" tabindex="1">
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <div class="form-group">
                                                            <label for="flyer-title" class="control-label">Title</label>
                                                            <input required class="form-control" id="flyer-title" placeholder="Main title" value="Really incredible!!" maxlength="255" type="text" tabindex="2">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="flyer-title-size" class="control-label">Size (pt)</label>
                                                            <input required class="form-control" id="flyer-title-size" value="60" min="1" step="1" type="number" tabindex="3" title="Title size: tune it to fit the available space">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label for="flyer-title-color" class="control-label">Color</label>
                                                            <input required class="form-control" id="flyer-title-color" value="#0080FF" type="color" tabindex="4" title="Title color">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label" for="flyer-description">Description</label>
                                                    <textarea class="form-control" id="flyer-description" placeholder="Insert a short description taking care of the available space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, nihil officia neque ad expedita consequatur quae! Voluptate, incidunt, earum, sit, eveniet harum ratione expedita quibusdam possimus sed laboriosam dolore ut recusandae eos. Ipsa,natus pariatur iste dolorum optio nostrum consectetur!</textarea>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="flyer-price" class="control-label">Price</label>
                                                            <input required class="form-control" id="flyer-price" placeholder="Enter price (w/o decimals)" value="100" type="number" tabindex="5" step="any" min="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="flyer-price-currency" class="control-label">Currency</label>
                                                            <select required class="form-control" id="flyer-price-currency" tabindex="6">
                                                                <option value="&euro;">&euro;</option>
                                                                <option value="$">$</option>
                                                                <option value="&pound;">&pound;</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label for="flyer-price-color" class="control-label">Color</label>
                                                            <input required class="form-control" id="flyer-price-color" value="#cc0000" type="color" tabindex="8" title="Price color">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <button id="flyer_preview_btn" type="button" class="btn btn-primary btn-block" tabindex="9">Update preview</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group text-right">
                                                            <button id="flyer_download_btn" type="button" class="btn btn-default btn-xs btn-block" tabindex="10">Download</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-6">
                                                <iframe id="pdf_preview" type="application/pdf" src=""></iframe>
                                            </div>

                                        </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.wrapper -->


        <!-- BEGIN TEMPLATE default-footer.php INCLUDE -->
        <?php include "./templates-admin/default-footer.php" ?>
        <!-- END TEMPLATE default-footer.php INCLUDE -->

        <!-- Sidebar Background -->
        <div class="control-sidebar-bg">
        </div>
        <!-- BEGIN TEMPLATE default-js.php INCLUDE -->
        <?php include "./templates-admin/default-js.php" ?>
        <!-- END TEMPLATE default-js.php INCLUDE -->

        <!-- PAGE-SPECIFIC JS -->
        <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
        <!--<script type="text/javascript" src="dist/js/vendor/jspdf.min.js"></script>-->
        <script>
            /* jshint undef:false, newcap: false, unused:false */

            (function (API) {
                API.textAlign = function (txt, options, x, y) {
                    options = options || {};
                    // Use the options align property to specify desired text alignment
                    // Param x will be ignored if desired text alignment is 'center'.
                    // Usage of options can easily extend the function to apply different text
                    // styles and sizes

                    // Get current font size
                    var fontSize = this.internal.getFontSize();

                    // Get page width
                    var pageWidth = this.internal.pageSize.width;

                    // Get the actual text's width
                    // You multiply the unit width of your string by your font size and divide
                    // by the internal scale factor. The division is necessary
                    // for the case where you use units other than 'pt' in the constructor
                    // of jsPDF.

                    var txtWidth = this.getStringUnitWidth(txt) * fontSize / this.internal.scaleFactor;

                    if (options.align === "center") {

                        // Calculate text's x coordinate
                        x = (pageWidth - txtWidth) / 2;

                    } else if (options.align === "centerAtX") { // center on X value

                        x = x - (txtWidth / 2);

                    } else if (options.align === "right") {

                        x = x - txtWidth;
                    }

                    // Draw text at x,y
                    this.text(txt, x, y);
                };
                /*
                 API.textWidth = function(txt) {
                 var fontSize = this.internal.getFontSize();
                 return this.getStringUnitWidth(txt)*fontSize / this.internal.scaleFactor;
                 };
                 */

                API.getLineHeight = function (txt) {
                    return this.internal.getLineHeight();
                };

            })(jsPDF.API);

            (function () {
                "use strict";

                /*
                 Refs:
                 https://mrrio.github.io/jsPDF/
                 https://github.com/MrRio/jsPDF
                 https://mrrio.github.io/jsPDF/doc/symbols/jsPDF.html
                 */

                // some variables
                var agency_logo = {
                    src: "data:image/png;base64,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",
                    w: 299,
                    h: 258
                },
                        agency_name = 'Travel & Holidays',
                        agency_site_url = 'www.travelandholidays.com',
                        footer = agency_name + ' - ' + agency_site_url,
                        page_size = 'a4',
                        page_width = 210, // mm
                        page_margin = 10, // mm
                        content_width = page_width - (page_margin * 2), // available width for the content

                        _y, _x, // drawing coord
                        color_array, _string, lineHeight, y_correction, // some variables

                        vspace = 10 // standard vertical space between elements

                        ;

                // some variables
                var can_display_preview = true, // if true a preview of the PDF can be displayed in the iframe,
                        // this value is set to false if the browser can't display the preview
                        preview_container = $('#pdf_preview'),
                        update_preview_button = $('#flyer_preview_btn'),
                        download_button = $('#flyer_download_btn');

                // preview can be displayed?
                if (navigator.msSaveBlob) { // older IE
                    update_preview_button.prop('disabled', true);
                    can_display_preview = false;
                    preview_container.replaceWith(
                            '<div class="no_iframe">' +
                            '<div>' +
                            "The preview can't be displayed" +
                            '</div>' +
                            '</div>'
                            );
                }

                // utilities
                var hex2rgb = function (hex_string) {
                    if (/^#/.test(hex_string)) {
                        hex_string = hex_string.substr(1);
                    }
                    if (hex_string.length === 3) {
                        hex_string = hex_string.replace(/\w/, function (match) {
                            return String(match) + String(match);
                        });
                    }

                    return {
                        red: parseInt(hex_string.substr(0, 2), 16),
                        green: parseInt(hex_string.substr(2, 2), 16),
                        blue: parseInt(hex_string.substr(4, 2), 16)
                    };
                },
                        px2mm = function (pixel) {
                            // px to inches
                            var inches = pixel / 72;
                            return inches * 25.4;
                        },
                        mm2px = function (millimeters) {
                            // mm to inches
                            var inches = millimeters / 25.4;
                            return inches * 72;
                        },
                        // function to calculate and check img sizes
                        imgSizes = function (img_w, img_h, img_mm_w) {
                            /*
                             img_w and img_h represent the original image size, in pixel
                             img_mm_w is the desidered rendered image size, in millimeters
                             
                             */

                            if (img_mm_w > content_width) { // this should be never used...
                                img_mm_w = content_width;
                            }

                            if (mm2px(img_mm_w) > img_w) {
                                throw 'The `img_mm_w` parameter is too big';
                            }

                            var img_mm_h = Math.round((px2mm(img_h) * img_mm_w) / px2mm(img_w));

                            return {
                                w: img_mm_w,
                                h: img_mm_h,
                                centered_x: (page_width - img_mm_w) / 2
                            };
                        };

                try {

                    // image reading
                    // More info at https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsDataURL
                    // for more examples about file api
                    // take a look at https://scotch.io/tutorials/use-the-html5-file-api-to-work-with-files-locally-in-the-browser

                    var flyer_img = $('#flyer-image'),
                            img_data = null;

                    $('#flyer-image').change(function () {

                        // temporary disabling buttons while parsing image
                        update_preview_button.prop('disabled', true);
                        download_button.prop('disabled', true);

                        /*
                         getting the file
                         
                         flyer_img[0] : transforms the jQuery reference to a DOM object
                         files[0]     : refers to the file the the user has chosen
                         
                         use `console.log(user_file);` to show some info about the file
                         
                         */

                        var user_file = flyer_img[0].files[0];

                        img_data = {
                            type: user_file.type === 'image/jpeg' ? 'JPEG' : 'PNG' // maybe you should add some controls to prevent loading of other file types
                        };

                        var reader = new FileReader();
                        reader.onload = function (event) {
                            img_data.src = event.target.result;

                            // we need this to get img dimensions
                            var user_img = new Image();
                            user_img.onload = function () {
                                img_data.w = user_img.width;
                                img_data.h = user_img.height;

                                // restoring buttons
                                download_button.prop('disabled', false);
                                if (can_display_preview) {
                                    update_preview_button.prop('disabled', false);
                                }
                            };
                            user_img.src = img_data.src;
                        };

                        //when the file is read it triggers the onload event above.
                        reader.readAsDataURL(user_file);
                    });

                    //!pdf builder
                    var createPDF = function (update_preview) {
                        /*
                         update_preview:
                         ==> true: shows pdf online
                         ==> false: downloads the pdf
                         */

                        _y = page_margin; // vertical starting point

                        // form data
                        var flyer_title = $('#flyer-title').val(),
                                flyer_title_size = $('#flyer-title-size').val(),
                                flyer_title_color = $('#flyer-title-color').val(),
                                flyer_description = $('#flyer-description').val(),
                                flyer_price = $('#flyer-price').val(),
                                flyer_price_currency = $('#flyer-price-currency').val(),
                                flyer_price_color = $('#flyer-price-color').val();

                        var pdf = new jsPDF('p', 'mm', page_size),
                                text_baseline,
                                // some colors:
                                light_grey = 237,
                                grey = 128,
                                black = 0,
                                white = 255;

                        // Optional - set properties of the document
                        pdf.setProperties({
                            title: flyer_title,
                            subject: footer,
                            author: 'me',
                            creator: 'Flyer Builder & jsPDF'
                        });

                        // !logo
                        var logo_sizes = imgSizes(agency_logo.w, agency_logo.h, 60);
                        pdf.addImage(agency_logo.src, 'PNG', logo_sizes.centered_x, _y, logo_sizes.w, logo_sizes.h);

                        // fonts initializing
                        pdf.setFont("helvetica");
                        pdf.setFontType("bold");

                        // !main title
                        color_array = hex2rgb(flyer_title_color);
                        pdf.setTextColor(color_array.red, color_array.green, color_array.blue);

                        pdf.setFontSize(flyer_title_size);

                        lineHeight = px2mm(pdf.getLineHeight(flyer_title));

                        _y += (logo_sizes.h + vspace + lineHeight);

                        pdf.textAlign(flyer_title, {
                            align: "center"
                        }, 0, _y);

                        _y += vspace;

                        // !user image
                        if (img_data) {
                            var img_sizes = imgSizes(img_data.w, img_data.h, content_width);
                            pdf.addImage(img_data.src, img_data.type, img_sizes.centered_x, _y, img_sizes.w, img_sizes.h);
                            _y += img_sizes.h;

                        } else {
                            // if we haven't an image, a grey box with a text is added

                            var box_height = 80;

                            pdf.setFillColor(light_grey);
                            pdf.roundedRect(page_margin, _y, content_width, box_height, 5, 5, 'F');
                            pdf.setFontSize(60);
                            pdf.setTextColor(white);
                            _string = 'SPECIAL OFFER';
                            lineHeight = px2mm(pdf.getLineHeight(_string));

                            // y_correction: value to be added to y coord of the grey box to have text vertically centered
                            // it is empirically calculated adding 1/3 of text line height to half box height
                            y_correction = box_height / 2 + lineHeight / 3;

                            pdf.textAlign(_string, {
                                align: "center"
                            }, 0, _y + y_correction);

                            _y += box_height;
                        }

                        // !price
                        // first: creating a circle that overlaps the bottom side of the image
                        var circle_radius = 30;
                        color_array = hex2rgb(flyer_price_color);
                        pdf.setFillColor(color_array.red, color_array.green, color_array.blue);

                        // _x and _y refer to center of the circle
                        _x = content_width - circle_radius; // circle ends at `page_margin` millimeters from the image right side

                        pdf.circle(_x, _y, circle_radius, 'F'); // circle overlaps image for 1/2 of its height

                        pdf.setFontSize(60);
                        pdf.setFont("times");
                        pdf.setFontType("bold");

                        _string = flyer_price_currency + parseInt(flyer_price); // decimals are removed

                        lineHeight = px2mm(pdf.getLineHeight(_string));
                        y_correction = lineHeight / 3;

                        pdf.setTextColor(white);
                        pdf.textAlign(_string, {
                            align: "centerAtX"
                        }, _x, _y + y_correction);

                        // !description
                        if (flyer_description) {
                            pdf.setFontSize(20);
                            pdf.setFont("helvetica");
                            pdf.setFontType("italic");
                            pdf.setTextColor(grey);

                            var lineWidth = content_width - (circle_radius * 2) - (page_margin * 2);
                            _y += page_margin;

                            var line_height = 12; // mm

                            var description_lines = pdf.splitTextToSize(flyer_description, lineWidth);
                            //pdf.text(page_margin, _y, description_lines); // doesn't allows to change line spacing

                            for (var i = 0; i < description_lines.length; i++) {
                                pdf.text(page_margin, _y, description_lines[i]);
                                _y += line_height;
                            }

                        }

                        // !footer
                        _y = 287;
                        pdf.setFontSize(9);
                        pdf.setFontType("normal");
                        pdf.setTextColor(black);
                        pdf.textAlign(footer, {
                            align: "center"
                        }, 0, _y);

                        // ****************************
                        // output
                        if (update_preview) {
                            preview_container.attr('src', pdf.output('datauristring'));
                        } else {
                            pdf.save('flyer ' + flyer_title + '.pdf');
                        }

                    }; // end createPDF

                    // !buttons
                    update_preview_button.click(function () {
                        createPDF(true);
                    });

                    $('#flyer_download_btn').click(function () {
                        createPDF(false);
                    });

                } catch (e) {
                    console.log(e);
                }

            })();
        </script>
    </body>

</html>
