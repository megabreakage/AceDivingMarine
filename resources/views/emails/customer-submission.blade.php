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
        <title>{{ $mail_data['title'] }}</title>
    </head>

    <!-- BODY -->
    <!-- Set message background color (twice) and text color (twice) -->

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
        <!-- Set message background color one again -->
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
                    <!-- Set wrapper width (twice) -->
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
                                <!-- Set text color to background color -->
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
                                    RoyalChoice Travel, a registered and trusted tour operator in Kenya, goes beyond
                                    ordinary tours. We curate personalized journeys that immerse you in the vibrant
                                    spirit of Kenya, Zanzibar, Cape Town, and Dubai. From thrilling wildlife safaris to
                                    relaxing beach getaways, and unique experiences like hot air balloon safaris and
                                    cultural visits, we craft unforgettable adventures tailored to your desires.
                                </div>

                                <!-- LOGO -->
                                <a target="_blank" style="text-decoration: none" href="{{ $mail_data['url'] }}"> <img
                                        border="0" vspace="0" hspace="0"
                                        src="https://royalchoicetravel.com/assets/site/images/Logos/rctl-logo.png"
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
										" /></a>
                            </td>
                        </tr>

                        <!-- End of WRAPPER -->
                    </table>

                    <!-- WRAPPER / CONTEINER -->
                    <!-- Set conteiner background color -->
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
                        <!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
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
                                {{ $mail_data['sub_title'] }}
                            </td>
                        </tr>

                        <!-- SUBHEADER -->
                        <!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
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
                                {{ $mail_data['title'] }}
                            </td>
                        </tr>

                        <!-- PARAGRAPH -->
                        <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
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
									padding-top: 25px;
									color: #000000;
									font-family: sans-serif;
								"
                                class="paragraph">
                                {{ $mail_data['body'] }}
                            </td>
                        </tr>

                        <!-- LINE -->
                        <!-- Set line color -->
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
                                class="line">
                                <hr color="#E0E0E0" align="center" width="100%" size="1" noshade
                                    style="margin: 0; padding: 0" />
                            </td>
                        </tr>

                        <!-- PARAGRAPH -->
                        <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
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
                                Customer Email Address:
                                <a href="mailto:deals@royalchoicetravel.com" target="_blank"
                                    style="
										color: #127db3;
										font-family: sans-serif;
										font-size: 17px;
										font-weight: 400;
										line-height: 160%;
									">{{ $mail_data['customer_email'] }}</a>
                            </td>
                        </tr>

                        <!-- End of WRAPPER -->
                    </table>

                    <!-- WRAPPER -->
                    <!-- Set wrapper width (twice) -->
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
                        <!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
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
                                            <a target="_blank" href="https://facebook.com/royalchoicetravel"
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
                                                    src="https://royalchoicetravel.com/assets/site/images/facebook.png" /></a>
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
                                            <a target="_blank" href="https://twitter.com/royalchoiceKE"
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
                                                    src="https://royalchoicetravel.com/assets/site/images/twitter.png" /></a>
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
                                            <a target="_blank" href="https://instagram.com/royalchoicetravel"
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
                                                    src="https://royalchoicetravel.com/assets/site/images/instagram.png" /></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- FOOTER -->
                        <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
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
                                If you're having trouble clicking the "View More Packages"
                                button, copy and paste this URL into your web browser:
                                <a href="{{ $mail_data['url'] }}" target="_blank"
                                    style="
										text-decoration: underline;
										color: #999999;
										font-family: sans-serif;
										font-size: 13px;
										font-weight: 400;
										line-height: 150%;
										color: #127db3;
									">{{ $mail_data['url'] }}</a>
                                anytime.

                                <!-- ANALYTICS -->
                                {{-- https://www.google-analytics.com/collect?v=1&tid={{ UA - Tracking - ID }}&cid={{ Client - ID }}&t=event&ec=email&ea=open&cs={{ Campaign - Source }}&cm=email&cn={{ Campaign - Name }} --}}
                                <img width="1" height="1" border="0" vspace="0" hspace="0"
                                    style="
										margin: 0;
										padding: 0;
										outline: none;
										text-decoration: none;
										-ms-interpolation-mode: bicubic;
										border: none;
										display: block;
									"
                                    src="https://raw.githubusercontent.com/konsav/email-templates/master/images/tracker.png" />
                            </td>
                        </tr>

                        <!-- End of WRAPPER -->
                    </table>

                    <!-- End of SECTION / BACKGROUND -->
                </td>
            </tr>
        </table>
    </body>

</html>
