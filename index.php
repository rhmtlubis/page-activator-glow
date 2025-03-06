<?php
// Get guest name from URL parameter if available
$guest_name = isset($_GET['to']) ? htmlspecialchars($_GET['to']) : "Nama Tamu";
$wedding_date = "Sabtu, 07 Desember 2024";
$akad_time = "11:00 AM until 13:00 PM";
$resepsi_time = "11:00 AM until 13:00 PM";
$venue = "Kediaman Mempelai";
$address = "Jl. K.H. Wahid Hasyim No. 67, Jakarta Pusat";
$hotel = "GRIPHTA HOTEL";
$hotel_address = "Jl. AKBP R. Agil Kusumadya No. 100<br>Jatimakmur Jati Wetan, Kec. Jati - Kudus";
$maps_url = "https://www.google.com/maps/place/?q=-6.8374899000000005,110.82201839999999";
$countdown_date = "2024-12-07T11:00:00";
?>
<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="color-scheme" content="light only">
    <meta name="format-detection" content="telephone=no">
    <meta name="google" content="notranslate"/>
    <title>Wedding - Selpia & Ernest</title>
    <meta name="title" content="Wedding - Selpia & Ernest">
    <meta name="description" content="Undangan website flowers watercolor minimalist nuansa biru muda tanpa foto">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oranienbaum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="app">
        <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
        
        <!-- Loader -->
        <div id="loader" class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        
        <!-- Music -->
        <audio id="music" loop autoplay>
            <source src="beautiful-in-white-saxserenade-westlife-saxophone-cover.mp3" type="audio/mp3">
        </audio>
        
        <div id="workspace-container" class="position-fixed h-100 w-100" style="overflow: hidden">
            <div id="panZoom" class="position-fixed h-100 w-100" style="top: 0; right:0; bottom:0; left:0; transform-origin: 50% 50%;">
                <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                    <div class="canvas not-open">
                        <!-- Invitation -->
                        <div id="satuMomen" data-guest="<?php echo $guest_name; ?>" data-group="VIP">
                            <div class="satumomen_track">
                                <ul class="satumomen_list">
                                    <!-- Cover Page -->
                                    <li class="satumomen_slide satumomen_cover">
                                        <div class="container-mobile cover" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="h-100 d-flex justify-content-center align-items-center">
                                                <div class="w-100">
                                                    <div style="background-image:url(images/flower.webp);background-size:contain;background-repeat:no-repeat;background-position:center;padding:3rem 0;">
                                                        <div class="d-flex justify-content-center animate__animated animate__zoomIn animate__slower image-editable">
                                                            <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(10px, -10px);font-weight:200;">E</div>
                                                            <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(-10px, 10px);font-weight:200;">S</div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="text-center mb-3" style="line-height:normal;">
                                                        <div class="mb-4 editable animate__animated animate__fadeInDown animate__slower" style="font-size:14.4px;animation-delay:1.5s;">The Wedding Of</div>
                                                        <div class="editable animate__animated animate__fadeInLeft animate__slower" style="font-size:80px;animation-delay:1.5s;">SELPIA</div>
                                                        <div class="position-relative editable animate__animated animate__zoomIn animate__slower" style="font-size:24px;z-index:1;animation-delay:1.5s;">AND</div>
                                                        <div class="editable animate__animated animate__fadeInRight animate__slower" style="font-size:80px;animation-delay:1.5s;">ERNEST</div>
                                                    </div>
                                                    
                                                    <div class="text-center mx-auto" style="max-width:300px;">
                                                        <div class="text-center mb-3 p-2 animate__animated animate__zoomIn animate__slower" style="animation-delay:2s;">
                                                            <div class="editable mb-1 animate__animated animate__fadeInUp animate__slower" style="font-size:14px;">
                                                                Kepada Yth;<br>
                                                                Bapak/Ibu/Saudara/i
                                                            </div>
                                                            <div id="guestNameSlot" class="editable color-accent h5 font-weight-bold mb-1 animate__animated animate__fadeInUp animate__slower" style="font-size:16px;">
                                                                <?php echo $guest_name; ?>
                                                            </div>
                                                        </div>
                                                        <button class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" style="font-size:14px;animation-delay: 2s;">Open Invitation</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Quote Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="px-2 h-100 d-flex flex-column justify-content-center align-items-center">
                                                <div style="background-image:url(images/flower.webp);background-size:contain;background-repeat:no-repeat;background-position:center;padding:3rem 0;min-width:200px;">
                                                    <div class="d-flex justify-content-center animate__animated animate__zoomIn animate__slower image-editable">
                                                        <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(10px, -10px);font-weight:200;">E</div>
                                                        <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(-10px, 10px);font-weight:200;">S</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-4 text-center animate__animated animate__fadeInUp animate__slower" style="animation-delay:500ms;">
                                                    <div class="editable color-accent" style="font-size:34px;line-height:1.2;">Selpia & Ernest</div>
                                                    <div class="editable" style="font-size:14.4px;"><?php echo $wedding_date; ?></div>
                                                </div>
                                                
                                                <div class="text-center animate__animated animate__fadeInUp animate__slower" style="animation-delay:1000ms;">
                                                    <div class="editable quotes mb-3" style="font-size:16px;">
                                                        Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.
                                                    </div>
                                                    <div class="editable" style="font-size:14.4px;">(Surah Ar-Rum : 21)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Couple Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="px-2 h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                                                <div class="editable text-center mb-4 animate__animated animate__fadeInDown animate__fast" style="font-size:14.4px;">
                                                    Tuhan membuat segala sesuatu indah pada waktunya.<br>
                                                    Dia yang mengajarkan kami tentang kasih,<br>
                                                    kini Dia pula yang mengikat putra-putri kami<br>
                                                    dengan kasih dalam pernikahan kudus
                                                </div>
                                                
                                                <div class="text-center" style="position:relative;">
                                                    <div class="editable color-accent h4 mb-2 animate__animated animate__fadeInLeft animate__slower font-accent" style="font-size:23px;">
                                                        IPDA. Albertus Bagas Satria, S.Tr.K., M.H.
                                                    </div>
                                                    <div class="editable animate__animated animate__zoomIn animate__slower" style="font-size:14.4px;">
                                                        Putra Ketiga Bpk. Ir. Ferdianandus Suwarno<br>
                                                        Ibu Margaretta Tutik Rahayuningsih, S.Pd.
                                                    </div>
                                                    <a href="https://instagram.com/" class="mt-2 link btn btn-primary btn-sm rounded-pill animate__animated animate__fadeInUp animate__slower" rel="nofollow noreferrer noopener" target="_blank">@instagram</a>
                                                </div>
                                                
                                                <div class="mt-4 mb-3 editable text-center color-accent animate__animated animate__zoomIn animate__slower font-italic font-accent" style="font-size:14px;">
                                                    dengan
                                                </div>
                                                
                                                <div class="text-center" style="position:relative;">
                                                    <div class="editable color-accent h4 mb-2 animate__animated animate__fadeInRight animate__slower font-accent" style="font-size:23px;">
                                                        dr. Beatrice Nareswari Dyah Wisesaningrum
                                                    </div>
                                                    <div class="editable animate__animated animate__zoomIn animate__slower" style="font-size:14.4px;">
                                                        Putri tunggal Bpk. R. Wahyu Wibihasmara, S.H.<br>
                                                        Ibu Wiwik Dwi Wisnuningdyah, S.H., M.H.
                                                    </div>
                                                    <a href="https://instagram.com/" class="mt-2 link btn btn-primary btn-sm rounded-pill animate__animated animate__fadeInUp animate__slower" rel="nofollow noreferrer noopener" target="_blank">@instagram</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Akad Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="d-flex justify-content-center align-items-center flex-column" style="height:100%;">
                                                <div style="background-image:url(images/flower.webp);background-size:contain;background-repeat:no-repeat;background-position:center;padding:3rem 0;min-width:200px;margin-top:-50px;">
                                                    <div class="d-flex justify-content-center animate__animated animate__zoomIn animate__slower image-editable">
                                                        <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(10px, -10px);font-weight:200;">E</div>
                                                        <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(-10px, 10px);font-weight:200;">S</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-5 mt-4 text-center w-100 p-4 bg-white d-flex flex-column justify-content-center align-items-center position-relative animate__animated animate__zoomIn animate__slower" style="box-shadow:0 .5rem 1rem rgba(0, 0, 0, .15) !important;max-width:280px;">
                                                    <div style="padding:1rem;background-color:var(--inv-accent);color:var(--btn-color);border-radius:100%;position:absolute;top:-14%;height:56px;width:56px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M6 3h12l4 6-10 13L2 9Z"></path>
                                                            <path d="M11 3 8 9l4 13 4-13-3-6"></path>
                                                            <path d="M2 9h20"></path>
                                                        </svg>
                                                    </div>
                                                    
                                                    <div class="mt-3 mb-2 color-accent editable animate__animated animate__fadeInUp animate__slower" style="font-size:24px;line-height:1.2;">
                                                        AKAD NIKAH
                                                    </div>
                                                    
                                                    <div class="mb-3 animate__animated animate__fadeInUp animate__slower" style="animation-delay:1s;">
                                                        <div class="text-center">
                                                            <div class="editable mb-3 font-weight-bold" style="font-size:14.4px;">
                                                                <?php echo $akad_time; ?>
                                                            </div>
                                                            <div class="editable font-weight-bold" style="font-size:14.4px;">
                                                                <?php echo $venue; ?>
                                                            </div>
                                                            <div class="editable" style="font-size:12px;">
                                                                <?php echo $address; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <a href="<?php echo $maps_url; ?>" class="link mx-auto btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" style="max-width:200px;font-size:14px;animation-delay:1.5s;" rel="noreferrer noopener">
                                                        Petunjuk Ke Lokasi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Resepsi Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="d-flex justify-content-center align-items-center flex-column" style="height:100%;">
                                                <div style="background-image:url(images/flower.webp);background-size:contain;background-repeat:no-repeat;background-position:center;padding:3rem 0;min-width:200px;margin-top:-50px;">
                                                    <div class="d-flex justify-content-center animate__animated animate__zoomIn animate__slower image-editable">
                                                        <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(10px, -10px);font-weight:200;">E</div>
                                                        <div class="editable h3 mb-0 font-accent" style="font-size:70px;transform:translate(-10px, 10px);font-weight:200;">S</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-5 mt-4 text-center w-100 p-4 bg-white d-flex flex-column justify-content-center align-items-center position-relative animate__animated animate__zoomIn animate__slower" style="box-shadow:0 .5rem 1rem rgba(0, 0, 0, .15) !important;max-width:280px;">
                                                    <div style="padding:1rem;background-color:var(--inv-accent);color:var(--btn-color);border-radius:100%;position:absolute;top:-14%;height:56px;width:56px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M6 3h12l4 6-10 13L2 9Z"></path>
                                                            <path d="M11 3 8 9l4 13 4-13-3-6"></path>
                                                            <path d="M2 9h20"></path>
                                                        </svg>
                                                    </div>
                                                    
                                                    <div class="mt-3 mb-2 color-accent editable animate__animated animate__fadeInUp animate__slower" style="font-size:24px;line-height:1.2;">
                                                        RESEPSI
                                                    </div>
                                                    
                                                    <div class="mb-3 animate__animated animate__fadeInUp animate__slower" style="animation-delay:1s;">
                                                        <div class="text-center">
                                                            <div class="editable mb-3 font-weight-bold" style="font-size:14.4px;">
                                                                <?php echo $resepsi_time; ?>
                                                            </div>
                                                            <div class="editable font-weight-bold" style="font-size:14.4px;">
                                                                <?php echo $venue; ?>
                                                            </div>
                                                            <div class="editable" style="font-size:12px;">
                                                                <?php echo $address; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <a href="<?php echo $maps_url; ?>" class="link mx-auto btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" style="max-width:200px;font-size:14px;animation-delay:1.5s;" rel="noreferrer noopener">
                                                        Petunjuk Ke Lokasi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Maps Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                                                <div style="width:100%;">
                                                    <div>
                                                        <div style="width:90%;margin:auto;border-radius:10px;overflow:hidden;margin-bottom:20px;padding-bottom:70%;position:relative;" class="animate__animated animate__fadeInDown animate__slow">
                                                            <iframe width="100%" height="100%" style="border:0;position:absolute;" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCpV55KNPo55TuxnDFd_dR3MD0luBrN1Gc&amp;zoom=17&amp;q=-6.8374899000000005,110.82201839999999" class="maps-embed"></iframe>
                                                        </div>
                                                        
                                                        <div class="text-center animate__animated animate__fadeInUp animate__slow">
                                                            <div class="color-accent editable font-weight-bold font-accent" style="font-size:14px;">
                                                                <?php echo $hotel; ?>
                                                            </div>
                                                            <div class="editable mb-3" style="font-size:14px;">
                                                                <?php echo $hotel_address; ?>
                                                            </div>
                                                            <a href="<?php echo $maps_url; ?>" class="btn-maps-link mx-auto btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" style="gap:8px;max-width:200px;" rel="noreferrer noopener">
                                                                Petunjuk Ke Lokasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- RSVP Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                                                <div style="width:100%;">
                                                    <div class="text-center color-accent h4 mb-4 editable animate__animated animate__fadeInDown animate__slow font-accent" style="font-size:30px;">
                                                        Menghitung Hari
                                                    </div>
                                                    
                                                    <div class="countdown-wrapper mx-auto mb-5 d-flex flex-column animate__animated animate__fadeInUp animate__slower" data-datetime="<?php echo $countdown_date; ?>" style="max-width:280px;">
                                                        <div class="countdown text-center color-accent">
                                                            <div class="countdown-item day" style="border:1px solid var(--inv-accent);">
                                                                <div class="number" id="days">00</div>
                                                                <div class="text editable" style="color:rgb(255, 255, 255);font-size:14.4px;">Hari</div>
                                                            </div>
                                                            <div class="countdown-item hour" style="border:1px solid var(--inv-accent);">
                                                                <div class="number" id="hours">00</div>
                                                                <div class="text editable" style="color:rgb(255, 255, 255);font-size:14.4px;">Jam</div>
                                                            </div>
                                                            <div class="countdown-item minute" style="border:1px solid var(--inv-accent);">
                                                                <div class="number" id="minutes">00</div>
                                                                <div class="text editable" style="color:rgb(255, 255, 255);font-size:14.4px;">Menit</div>
                                                            </div>
                                                            <div class="countdown-item second" style="border:1px solid var(--inv-accent);">
                                                                <div class="number" id="seconds">00</div>
                                                                <div class="text editable" style="color:rgb(255, 255, 255);font-size:14.4px;">Detik</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div>
                                                        <div class="text-center">
                                                            <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower" style="font-size:14.4px;">
                                                                Kirim ucapan untuk mempelai<br>
                                                                dan konfirmasi kehadiran
                                                            </div>
                                                            
                                                            <button class="btn-rsvp btn btn-primary mx-auto rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" style="gap:8px;">
                                                                Kirim Ucapan RSVP
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Thanks Page -->
                                    <li class="satumomen_slide">
                                        <div class="container-mobile" style="background-image: url(images/bg.webp);">
                                            <div class="frame">
                                                <div class="frame-tl animate-right" style="width: 55%;transform: translate(-3%, -10%);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-tr animate-right" style="width: 55%;transform: translate(3%, -10%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInTopLeft animate__slower">
                                                        <img src="images/top.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-bl animate-left" style="width: 55%;transform: translate(-11%, 13%);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="frame-br animate-left" style="width: 55%;transform: translate(11%, 13%) scaleX(-1);">
                                                    <div class="animate__animated animate__fadeInBottomLeft animate__slower">
                                                        <img src="images/bottom.webp" alt="flowers" class="w-100" draggable="false">
                                                    </div>
                                                </div>
                                                <img class="frame-out frame-tl animate__animated animate__slideOutLeft animate__slower" src="images/gate-kiri.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                                <img class="frame-out frame-tr animate__animated animate__slideOutRight animate__slower" src="images/gate-kanan.webp" alt="frame" style="z-index:9; height: 100%; animation-delay: 1s">
                                            </div>
                                            
                                            <div class="px-2 watermark d-flex flex-column" style="height:100%;">
                                                <div class="mt-auto" style="width:100%;">
                                                    <div class="text-center">
                                                        <div class="editable mb-2 animate__animated animate__fadeInDown animate__slower" style="font-size:14px;">
                                                            Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/ Saudara/I berkenan hadir untuk memberikan do'a restu kepada putri kami.
                                                        </div>
                                                        <div class="color-accent editable mb-3 animate__animated animate__fadeInDown animate__slower font-accent" style="font-size:14px;">
                                                            Salam Hormat Kedua Mempelai
                                                        </div>
                                                        <div class="mb-2 editable animate__animated animate__fadeInDown animate__slow" style="font-size:14px;">
                                                            Kami yang berbahagia<br>
                                                        </div>
                                                        
                                                        <div class="text-center d-flex align-items-center justify-content-center animate__animated animate__fadeInDown animate__slow" style="gap:14px;line-height:1.2;">
                                                            <div>
                                                                <div class="editable" style="text-decoration:underline;font-size:10px;">
                                                                    Keluarga
                                                                </div>
                                                                <div class="editable" style="font-size:10px;">
                                                                    Bpk. Ir. Ferdianandus Suwarno<br>
                                                                    Ibu Margaretta Tutik Rahayuningsih, S.Pd.
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="editable" style="text-decoration:underline;font-size:10px;">
                                                                    Keluarga
                                                                </div>
                                                                <div class="editable" style="font-size:10px;">
                                                                    Bpk. R. Wahyu Wibihasmara, S.H.<br>
                                                                    Ibu Wiwik Dwi Wisnuningdyah, S.H., M.H.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="watermark-placeholder text-center mb-auto mb-5 pb-5"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Bottom Navigation Menu -->
                        <div id="smMenu" class="satumomen_menu">
                            <ul class="satumomen_menu_list">
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-envelope"></i>
                                    <span>Opening</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-star-and-crescent"></i>
                                    <span>Quotes</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-heart"></i>
                                    <span>Couple</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-clock"></i>
                                    <span>Akad</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-clock"></i>
                                    <span>Resepsi</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Maps</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-comment"></i>
                                    <span>RSVP</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <i class="fas fa-mosque"></i>
                                    <span>Thanks</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Floating Action Buttons -->
        <div class="floating-action d-flex align-items-end flex-column">
            <button id="btnQrModal" onclick="showModal('qrModal')" class="btn-float">
                <i class="fas fa-qrcode"></i>
            </button>
            <button id="btnMusic" onclick="toggleMusic()" class="btn-float">
                <i class="fas fa-music play"></i>
                <i class="fas fa-volume-mute pause"></i>
            </button>
            <button id="btnAutoplay" onclick="toggleAutoplay()" class="btn-float">
                <i class="fas fa-play-circle play"></i>
                <i class="fas fa-pause-circle pause"></i>
            </button>
        </div>
        
        <!-- QR Modal -->
        <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="qr-image"></div>
                    <div class="text-center py-4 px-4">
                        <div>
                            <div class="mx-auto">
                                <!-- QR Code will be generated here -->
                                <div style="margin-top: 10px; text-align: center"></div>
                            </div>
                        </div>
                        <hr>
                        <div style="margin-bottom: 10px">
                            <div style="color: #b2b2b2;">Nama</div>
                            <div><?php echo $guest_name; ?></div>
                        </div>
                    </div>
                    <button onclick="closeModal('qrModal')" type="button" class="btn-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- RSVP Modal -->
        <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4">
                    <form id="rsvpForm" action="process.php" method="post">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo $guest_name; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="attendance">Kehadiran?</label>
                            <select id="attendance" name="attendance" class="form-control" required>
                                <option value="">Pilih Kehadiran</option>
                                <option value="hadir">Hadir</option>
                                <option value="tidak_hadir">Tidak Hadir</option>
                                <option value="ragu">Masih Ragu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="guest_count">Jumlah Tamu</label>
                            <select id="guest_count" name="guest_count" class="form-control" required>
                                <option value="1">1 Orang</option>
                                <option value="2">2 Orang</option>
                                <option value="3">3 Orang</option>
                                <option value="4">4 Orang</option>
                                <option value="5">5 Orang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Ucapan & Doa</label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Kirim</button>
                    </form>
                    <button onclick="closeModal('rsvpModal')" type="button" class="btn-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>

