<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0;" />
        <meta name="format-detection" content="telephone=no" />

        <style>
            body {
                margin: 0;
                padding: 0;
                min-width: 100%;
                width: 100% !important;
                height: 100% !important;
            }

            body,
            table,
            td,
            div,
            p,
            a {
                -webkit-font-smoothing: antialiased;
                text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                line-height: 100%;
            }

            table,
            td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                border-collapse: collapse !important;
                border-spacing: 0;
            }

            img {
                border: 0;
                line-height: 100%;
                outline: none;
                text-decoration: none;
                -ms-interpolation-mode: bicubic;
            }

            #outlook a {
                padding: 0;
            }

            .ReadMsgBody {
                width: 100%;
            }

            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            /* Rounded corners for advanced mail clients only */
            @media all and (min-width: 560px) {
                .container {
                    border-radius: 8px;
                    -webkit-border-radius: 8px;
                    -moz-border-radius: 8px;
                    -khtml-border-radius: 8px;
                }
            }

            /* Set color for auto links (addresses, dates, etc.) */
            a,
            a:hover {
                color: #127db3;
            }

            .footer a,
            .footer a:hover {
                color: #999999;
            }
        </style>

        <!-- MESSAGE SUBJECT -->
        <title>{{ $mail_data['title'] . ' - ' . $mail_data['subject'] }}</title>
    </head>

    <!-- BODY -->

    <body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%"
        style="
			border-collapse: collapse;
			border-spacing: 0;
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			-webkit-font-smoothing: antialiased;
			text-size-adjust: 100%;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
			line-height: 100%;
			background-color: #f0f0f0;
			color: #000000;
		"
        bgcolor="#F0F0F0" text="#000000">
        <!-- SECTION / BACKGROUND -->
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"
            style="
				border-collapse: collapse;
				border-spacing: 0;
				margin: 0;
				padding: 0;
				width: 100%;
			"
            class="background">
            <tr>
                <td align="center" valign="top"
                    style="
						border-collapse: collapse;
						border-spacing: 0;
						margin: 0;
						padding: 0;
					"
                    bgcolor="#F0F0F0">
                    <!-- WRAPPER -->
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="560"
                        style="
							border-collapse: collapse;
							border-spacing: 0;
							padding: 0;
							width: inherit;
							max-width: 560px;
						"
                        class="wrapper">
                        <tr>
                            <td align="center" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									padding-top: 20px;
									padding-bottom: 20px;
								">
                                <!-- PREHEADER -->
                                <div style="
										display: none;
										visibility: hidden;
										overflow: hidden;
										opacity: 0;
										font-size: 1px;
										line-height: 1px;
										height: 0;
										max-height: 0;
										max-width: 0;
										color: #f0f0f0;
									"
                                    class="preheader">
                                    {{ 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service, comprehensive safety and quality programs, and competitive rates since 2012.' }}
                                </div>

                                <!-- LOGO -->
                                <a target="_blank" style="text-decoration: none" href="{{ $mail_data['url'] }}"> <img
                                        border="0" vspace="0" hspace="0"
                                        src="https://acedivingmarine.com/assets/images/Logos/rctl-logo.png"
                                        height="50" alt="Logo" title="Logo"
                                        style="
											color: #000000;
											font-size: 10px;
											margin: 0;
											padding: 0;
											outline: none;
											text-decoration: none;
											-ms-interpolation-mode: bicubic;
											border: none;
											display: block; 
										" />
                                </a>
                            </td>
                        </tr>

                        <!-- End of WRAPPER -->
                    </table>

                    <!-- CONTENT WRAPPER -->
                    <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF"
                        width="560"
                        style="
							border-collapse: collapse;
							border-spacing: 0;
							padding: 0;
							width: inherit;
							max-width: 560px;
						"
                        class="container">
                        <!-- HEADER -->
                        <tr>
                            <td align="center" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									font-size: 24px;
									font-weight: bold;
									line-height: 130%;
									padding-top: 25px;
									color: #000000;
									font-family: sans-serif;
								"
                                class="header">
                                {{ $mail_data['title'] }}
                            </td>
                        </tr>

                        <!-- SUBHEADER -->
                        <tr>
                            <td align="center" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-bottom: 3px;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									font-size: 18px;
									font-weight: 300;
									line-height: 150%;
									padding-top: 5px;
									color: #000000;
									font-family: sans-serif;
								"
                                class="subheader">
                                {{ $mail_data['subject'] }}
                            </td>
                        </tr>


                        <!-- PARAGRAPH -->
                        <tr>
                            <td align="" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									font-size: 17px;
									font-weight: 400;
									line-height: 160%;
									padding-top: 25px;
									color: #000000;
									font-family: sans-serif;
								"
                                class="paragraph">
                                {{ $mail_data['body'] }}
                            </td>
                        </tr>

                        <!-- PARAGRAPH -->
                        <tr>
                            <td align="center" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									font-size: 17px;
									font-weight: 400;
									line-height: 160%;
									padding-top: 20px;
									padding-bottom: 25px;
									color: #000000;
									font-family: sans-serif;
								"
                                class="paragraph">
                                Have a&nbsp;question? Reach out to us on email
                                <a href="mailto:hr@acedivingmarine.com" target="_blank"
                                    style="
										color: #127db3;
										font-family: sans-serif;
										font-size: 17px;
										font-weight: 400;
										line-height: 160%;
									">hr@acedivingmarine.com</a>
                            </td>
                        </tr>

                        <!-- End of WRAPPER -->
                    </table>

                    <!-- WRAPPER -->
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="560"
                        style="
							border-collapse: collapse;
							border-spacing: 0;
							padding: 0;
							width: inherit;
							max-width: 560px;
						"
                        class="wrapper">
                        <!-- SOCIAL NETWORKS -->
                        <tr>
                            <td align="center" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									padding-top: 25px;
								"
                                class="social-icons">
                                <table width="256" border="0" cellpadding="0" cellspacing="0" align="center"
                                    style="
										border-collapse: collapse;
										border-spacing: 0;
										padding: 0;
									">
                                    <tr>
                                        <!-- ICON 1 -->
                                        <td align="center" valign="middle"
                                            style="
												margin: 0;
												padding: 0;
												padding-left: 10px;
												padding-right: 10px;
												border-collapse: collapse;
												border-spacing: 0;
											">
                                            <a target="_blank" href="https://facebook.com/acedivingmarine"
                                                style="text-decoration: none"><img border="0" vspace="0"
                                                    hspace="0"
                                                    style="
														padding: 0;
														margin: 0;
														outline: none;
														text-decoration: none;
														-ms-interpolation-mode: bicubic;
														border: none;
														display: inline-block;
														color: #000000;
													"
                                                    alt="Facebook" title="Facebook" width="44" height="44"
                                                    src="https://acedivingmarine.com/assets/images/facebook.png" /></a>
                                        </td>

                                        <!-- ICON 2 -->
                                        <td align="center" valign="middle"
                                            style="
												margin: 0;
												padding: 0;
												padding-left: 10px;
												padding-right: 10px;
												border-collapse: collapse;
												border-spacing: 0;
											">
                                            <a target="_blank" href="https://twitter.com/acedivingmarine"
                                                style="text-decoration: none"><img border="0" vspace="0"
                                                    hspace="0"
                                                    style="
														padding: 0;
														margin: 0;
														outline: none;
														text-decoration: none;
														-ms-interpolation-mode: bicubic;
														border: none;
														display: inline-block;
														color: #000000;
													"
                                                    alt="Twitter" title="Twitter" width="44" height="44"
                                                    src="https://acedivingmarine.com/assets/images/twitter.png" /></a>
                                        </td>

                                        <!-- ICON 3 -->
                                        <td align="center" valign="middle"
                                            style="
												margin: 0;
												padding: 0;
												padding-left: 10px;
												padding-right: 10px;
												border-collapse: collapse;
												border-spacing: 0;
											">
                                            <a target="_blank" href="https://instagram.com/acedivingmarine"
                                                style="text-decoration: none"><img border="0" vspace="0"
                                                    hspace="0"
                                                    style="
														padding: 0;
														margin: 0;
														outline: none;
														text-decoration: none;
														-ms-interpolation-mode: bicubic;
														border: none;
														display: inline-block;
														color: #000000;
													"
                                                    alt="Instagram" title="Instagram" width="44" height="44"
                                                    src="https://acedivingmarine.com/assets/images/instagram.png" /></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top"
                                style="
									border-collapse: collapse;
									border-spacing: 0;
									margin: 0;
									padding: 0;
									padding-left: 6.25%;
									padding-right: 6.25%;
									width: 87.5%;
									font-size: 13px;
									font-weight: 400;
									line-height: 150%;
									padding-top: 20px;
									padding-bottom: 20px;
									color: #999999;
									font-family: sans-serif;
								"
                                class="footer">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>
