<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>MOSAICO</title>
        <link rel="stylesheet" href="css/home_style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
      <div class="modal fade" id="ModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                  <span class="modal-title-text">{{ __('lang.choose_centre') }}</span>
                  <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="containerMosaic">
                     <div class="typeMosaic">
                        <div class="holderText" onclick="toggle_visibility('floral');">
                        <a href="#" class="a">Floral</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Geometrique</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Art</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Nouveau</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Classique</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Modern</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Jakob</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Hentze</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Mykonos</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Tout</a>
                        </div>
                     </div>
                     <div class="designMosaic">
                     <p style="text-align: center; margin-top:40%;" id="type">{{ __('lang.choose_type') }}</p>
                        <div id="floral" style="display: none;">
                        <p style="text-align: center;">{{ __('lang.choose_pattern') }}</p>
                        <div class="holderMosaic" style="display:flex;justify-content: space-around;">
                              <div class="centerIT">
                                 <div class="center 3 0 0 0 norotate" id="117" onclick="getIdCenter(this)"></div>
                                 <p class="ctr">117</p>
                              </div>
                              <div class="centerIT">
                                 <div class="center 3 4 5 0 norotate" id="119" onclick="getIdCenter(this)"></div>
                                 <p class="ctr">119</p>
                              </div>
                              <div class="centerIT">
                                 <div class="center 3 4 5 0 norotate" id="127" onclick="getIdCenter(this)"></div>
                                 <p class="ctr">127</p>
                              </div>
                              <div class="centerIT">
                                 <div class="center 3 4 5 6 norotate" id="128" onclick="getIdCenter(this)"></div>
                                 <p class="ctr">128</p>
                              </div>
                              <div class="centerIT">
                                 <div class="center 3 4 5" id="225" onclick="getIdCenter(this)"></div>
                                 <p class="ctr">225</p>
                              </div>
                              <div class="centerIT">
                                 <div class="center 3 4 0 0 norotate" id="2052" onclick="getIdCenter(this)"></div>
                                 <p class="ctr">2052</p>
                              </div>
                              <div class="X">
                                 <span id="X">X</span>
                           </div>
                           </div>
                        </div>
                     </div>  
                  </div>
                  <div class="modal-footer" style="display:none;">
                  <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      </div>

      <div class="modal fade" id="ModalBorder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                  <span class="modal-title-text">{{ __('lang.choose_border') }}</span>
                  <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="containerMosaic">
                     <div class="typeMosaic">
                        <div class="holderText" onclick="toggle_visibility('floralBorder');">
                        <a href="#" class="a">Floral</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Geometrique</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Art</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Nouveau</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Classique</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Modern</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Jakob</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Hentze</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Mykonos</a>
                        </div>
                        <div class="holderText holderText-soon">
                        <a href="#" class="a">Tout</a>
                        </div>
                     </div>
                     <div class="designMosaic">
                     <p style="text-align: center; margin-top:40%;" id="typeBorder">{{ __('lang.choose_type') }}</p>
                        <div id="floralBorder" style="display: none;">
                        <p style="text-align: center;">{{ __('lang.choose_pattern') }}</p>
                        <div class="holderMosaic" style="display:flex;justify-content: space-around;">
                              <div class="centerIT">
                                 <div class="border 3 4" id="401" onclick="getIdBorder(this)"></div>
                                 <p class="ctr">401</p>
                              </div>
                              <div class="centerIT">
                                 <div class="border 3 4" id="424" onclick="getIdBorder(this)"></div>
                                 <p class="ctr">424</p>
                              </div>
                              <div class="XBorder">
                                 <span id="XBorder">X</span>
                           </div>
                           </div>
                        </div>
                     </div>  
                  </div>
                  <div class="modal-footer" style="display:none;">
                  <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      </div>

      
      <div id="saveDesignOverlay" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.45);z-index:2000;align-items:center;justify-content:center;">
         <div style="background:#fff;border-radius:12px;padding:28px 32px;min-width:320px;max-width:420px;width:90%;box-shadow:0 8px 32px rgba(0,0,0,0.18);">
            <div style="font-size:0.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--ink3);margin-bottom:14px;">{{ __('lang.save_design') }}</div>
            <input id="saveDesignName" type="text" placeholder="{{ __('lang.save_design') }}"
               style="width:100%;padding:10px 14px;border:1.5px solid var(--border2);border-radius:8px;font-size:0.9rem;font-family:inherit;color:var(--ink);outline:none;box-sizing:border-box;transition:border-color .15s;"
               onfocus="this.style.borderColor='var(--terra)'" onblur="this.style.borderColor='var(--border2)'"/>
            <div style="display:flex;gap:10px;margin-top:18px;justify-content:flex-end;">
               <button onclick="closeSaveModal()" style="padding:8px 18px;border-radius:7px;border:1.5px solid var(--border2);background:#fff;font-size:0.78rem;font-weight:600;cursor:pointer;color:var(--ink2);">✕</button>
               <button onclick="confirmSaveDesign()" style="padding:8px 18px;border-radius:7px;border:none;background:var(--terra);color:#fff;font-size:0.78rem;font-weight:600;cursor:pointer;">{{ __('lang.save') }}</button>
            </div>
         </div>
      </div>

      <div class="studio">

         <header class="studio-header">
         <span style="font-family:'Cormorant Garamond',Georgia,serif;font-size:1.1rem;font-weight:500;letter-spacing:.22em;color:var(--ink);text-transform:uppercase;flex-shrink:0;">Mosaico</span>
            <div class="studio-toolbar">
               <button type="button" class="btn-pick" data-bs-toggle="modal" data-bs-target="#ModalCenter">+ {{ __('lang.centre') }}</button>
               <button type="button" class="btn-pick btn-pick-border" data-bs-toggle="modal" data-bs-target="#ModalBorder">+ {{ __('lang.border') }}</button>
               <div class="toolbar-sep"></div>
               <button class="btn-tool" id="btnRefresh" onclick="refreshCanvas()" title="{{ __('lang.refresh') }}">↺</button>

               <div style="position:relative;display:inline-block;">
                  <button class="btn-tool" id="btnExport" title="{{ __('lang.export') }}">↓</button>
                  <div id="exportMenu" style="display:none;position:absolute;top:calc(100% + 4px);left:0;background:#fff;border:1px solid var(--border);border-radius:8px;z-index:200;min-width:100px;box-shadow:0 4px 12px rgba(0,0,0,0.1);overflow:hidden;">
                     <a href="#" onclick="exportAs('png');return false;" style="display:block;padding:9px 14px;font-size:0.78rem;color:var(--ink);text-decoration:none;transition:background .1s;" onmouseover="this.style.background='var(--off)'" onmouseout="this.style.background=''">PNG</a>
                     <a href="#" onclick="exportAs('pdf');return false;" style="display:block;padding:9px 14px;font-size:0.78rem;color:var(--ink);text-decoration:none;border-top:1px solid var(--border);transition:background .1s;" onmouseover="this.style.background='var(--off)'" onmouseout="this.style.background=''">PDF</a>
                  </div>
               </div>

               <button class="btn-tool" id="btnSaveDesign" onclick="saveDesignToDb()" title="{{ __('lang.save_design') }}">{{ __('lang.save_design') }}</button>

               <button class="btn-tool" id="btnOrder" onclick="goToOrder()" title="{{ __('lang.order') }}" style="font-size:0.65rem;letter-spacing:.04em;padding:0 10px;min-width:auto;">{{ __('lang.order') }}</button>
               <div class="toolbar-sep"></div>
               <button class="btn-tool" id="btnHelp" onclick="showHelp()" title="?">?</button>
            </div>
            <div class="header-actions">
               <a href="{{ route('designs.index') }}" style="font-size:0.72rem;color:var(--ink2);text-decoration:none;margin-right:8px;" title="{{ __('lang.my_designs') }}">{{ __('lang.my_designs') }}</a>
               <a href="{{ route('orders.index') }}" style="font-size:0.72rem;color:var(--ink2);text-decoration:none;margin-right:8px;" title="{{ __('lang.my_orders') }}">{{ __('lang.my_orders') }}</a>
               <a href="{{ route('profile') }}" style="font-size:0.76rem;color:var(--ink2);text-decoration:none;margin-right:6px;">{{ auth()->user()->name }}</a>
               <form method="POST" action="{{ route('logout') }}" style="display:inline;margin:0;">
                  @csrf
                  <button type="submit" class="btn-logout">{{ __('lang.logout') }}</button>
               </form>
            </div>
         </header>

         <div class="studio-body">

            <aside class="studio-sidebar">

               <div class="sidebar-section">
                  <div class="sidebar-label">
                     <span class="label-dot" style="background:#c0553a;"></span>
                     {{ __('lang.centre') }}
                  </div>
                  <div class="sidebar-tiles">
                     <div class="tile-slot"><img width="55" height="55" class="center1 c"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="center2 c"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="center3 c"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="center4 c"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="center5 c"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="center6 c"/></div>
                  </div>
                  <p class="sidebar-hint">{{ __('lang.click_colour') }}</p>
               </div>

               <div class="sidebar-section">
                  <div class="sidebar-label">
                     <span class="label-dot" style="background:#7ca6ca;"></span>
                     {{ __('lang.border') }}
                  </div>
                  <div class="sidebar-tiles">
                     <div class="tile-slot"><img width="55" height="55" class="border1 b"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="border2 b"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="border3 b"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="border4 b"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="border5 b"/></div>
                     <div class="tile-slot"><img width="55" height="55" class="border6 b"/></div>
                  </div>
                  <p class="sidebar-hint">{{ __('lang.click_colour') }}</p>
               </div>

               <div class="sidebar-section">
               <div class="sidebar-label">
                  <span class="label-dot" style="background:rgba(179,74,50,0.4);"></span>
                  {{ __('lang.colour') }}
               </div>

               <div style="margin-bottom:14px;">
                  <div style="font-size:0.56rem;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-mute);margin-bottom:7px;font-weight:600;">Frame / Grout</div>
                  <div style="display:flex;align-items:center;gap:8px;">
                     <button class="squareColor" id="squareColor" title="{{ __('lang.colour_bg') }}" style="position:relative;"></button>
                     <span style="font-size:0.68rem;color:var(--ink3);">← applies to the tile border</span>
                  </div>
               </div>

               <div>
                  <div style="font-size:0.56rem;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-mute);margin-bottom:7px;font-weight:600;">Tile Layers</div>
                  <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap;">
                     <button class="wrapperColor" id="letter7ca6ca" title="{{ __('lang.colour_blue') }}"></button>
                     <button class="wrapperColor" id="letterb9595a" title="Rouge"></button>
                     <button class="wrapperColor" id="letterfaeab0" title="Jaune"></button>
                     <div class="Y" style="width:34px;height:34px;font-size:0.75rem;"><span id="Y">✕</span></div>
                  </div>
               </div>

               <p class="sidebar-hint">① Select a tile thumbnail  ② Click a colour</p>
               </div>

               <div class="sidebar-footer">© 2020 Mosaico</div>

            </aside>

            <main class="studio-canvas">
               <div class="rightArea">
                  <div class="canvas-empty" id="canvasEmpty">
                     <div class="canvas-empty-text">{{ __('lang.choose_centre') }}</div>
                     <div class="canvas-empty-sub">{{ __('lang.click_centre_hint') }}</div>
                  </div>
                  <div class="containerSquare" id="containerSquare">
                     <div class="rowcol">@include('repeatTextTop')</div>
                     <div class="rowcol">@include('repeatTextTop2')</div>
                     <div class="rowcol">@include('repeatText2')</div>
                     <div class="rowcol">@include('repeatText3')</div>
                     <div class="rowcol">@include('repeatTextTop3')</div>
                     <div class="rowcol">@include('repeatTextTop4')</div>
                     <div class="rowcol">@include('repeatText5')</div>
                     <div class="rowcol">@include('repeatText6')</div>
                  </div>
               </div>
            </main>

         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
      
      <script type="text/javascript">
             function toggle_visibility(id) {
                var e = document.getElementById(id);
                var type = document.getElementById("type");
                var typeBorder = document.getElementById("typeBorder");
                if(e.style.display == 'block'){
                   e.style.display='none';
                   if(id=="floral")
                   type.style.display='block';
                   else
                   typeBorder.style.display='block';
                   }
                else{
                   e.style.display = 'block';
                   if(id=="floral")
                   type.style.display='none';
                   else
                   typeBorder.style.display='none';
                  }
             }
         </script>
         <script type="text/javascript">
         setInterval(function(){
               var canvasEl = document.querySelector('.studio-canvas');
               if (!canvasEl) return;
               var pad = 56;
               var availW = canvasEl.clientWidth - pad;
               var availH = canvasEl.clientHeight - pad;
               var a = Math.min(Math.floor(availW / 12), Math.floor(availH / 8));
               if (a < 4) return;
               var elements = document.getElementsByClassName("col-12");
               for(var i = 0; i < elements.length; i++){
                  elements[i].style.setProperty("width", a+"px", "important");
                  elements[i].style.setProperty("height", a+"px", "important");
               }
         }, 1);
         </script>
         <script type="text/javascript">
            var rightArea = document.getElementsByClassName("rightArea");
            rightArea[0].style.borderWidth ="0px";
            function getIdCenter(imgid){
               rightArea[0].style.overflow = "visible";
               var emptyState = document.getElementById('canvasEmpty');
               if (emptyState) emptyState.style.display = 'none';
               var lft = document.getElementsByClassName("lft");                           
               var tp = document.getElementsByClassName("tp");
               var tp1 = document.getElementsByClassName("tp1");
               var tp2 = document.getElementsByClassName("tp2");
               var tp3 = document.getElementsByClassName("tp3");
               var tp4 = document.getElementsByClassName("tp4");
               var tp5 = document.getElementsByClassName("tp5");
               var tp6 = document.getElementsByClassName("tp6");
               var tp7 = document.getElementsByClassName("tp7");
               var tp8 = document.getElementsByClassName("tp8");
               var col = document.getElementsByClassName("col-12");
               var appearlft = document.getElementsByClassName("appearlft");
               for(var i=0;i<appearlft.length;i++){
                  appearlft[i].style.display="none";
               }
               for(var i=0;i<col.length;i++){
                  col[i].style.borderWidth ="1px";
               }
               for(var i=0;i<lft.length;i++){
                  lft[i].style.left="0px";
                  lft[i].style.top="0px";
               }
               for(var i=0;i<tp.length;i++){
                  tp[i].style.top="0px";
               }
               for(var i=0;i<tp1.length;i++){
                  tp1[i].style.top="0px";
               }
               for(var i=0;i<tp2.length;i++){
                  tp2[i].style.top="0px";
               }
               for(var i=0;i<tp3.length;i++){
                  tp3[i].style.top="0px";
               }
               for(var i=0;i<tp4.length;i++){
                  tp4[i].style.top="0px";
               }
               for(var i=0;i<tp5.length;i++){
                  tp5[i].style.top="0px";
               }
               for(var i=0;i<tp6.length;i++){
                  tp6[i].style.top="0px";
               }
               for(var i=0;i<tp7.length;i++){
                  tp7[i].style.top="0px";
               }
               for(var i=0;i<tp8.length;i++){
                  tp8[i].style.top="0px";
               }

                     if(imgid.id=="2052"){
                        for(var i=0;i<appearlft.length;i++){
                           appearlft[i].style.display="block";
                        }
                        for(var i=0;i<lft.length;i++){
                           lft[i].style.left="45px";
                           lft[i].style.top="-42px";
                        }
                        for(var i=0;i<tp.length;i++){
                           tp[i].style.top="-27px";
                        }
                        for(var i=0;i<tp1.length;i++){
                           tp1[i].style.top="-55px";
                        }
                        for(var i=0;i<tp2.length;i++){
                           tp2[i].style.top="-69px";
                        }
                        for(var i=0;i<tp3.length;i++){
                           tp3[i].style.top="-82px";
                        }
                        for(var i=0;i<tp4.length;i++){
                           tp4[i].style.top="-95px";
                        }
                        for(var i=0;i<tp5.length;i++){
                           tp5[i].style.top="-108px";
                        }
                        for(var i=0;i<tp6.length;i++){
                           tp6[i].style.top="-121px";
                        }
                        for(var i=0;i<tp7.length;i++){
                           tp7[i].style.top="-46px";
                        }
                        for(var i=0;i<tp8.length;i++){
                           tp8[i].style.top="28px";
                        }
                        for(var i=0;i<col.length;i++){
                           col[i].style.borderWidth ="0px";
                        }
                        rightArea[0].style.borderWidth ="1px";
                        rightArea[0].style.overflow = "hidden"; 
                     }
                     var rotate90 = document.getElementsByClassName("rotate90");
                        for(var i = 0; i<rotate90.length; i++){
                           if(!rotate90[i].classList.contains("dispbord"))
                              rotate90[i].style.transform = "rotate(0deg)";
                        }

                        var rotate180 = document.getElementsByClassName("rotate180");
                        for(var i = 0; i<rotate180.length; i++){
                           if(!rotate180[i].classList.contains("dispbord"))
                              rotate180[i].style.transform = "rotate(0deg)";
                        }

                        var rotate270 = document.getElementsByClassName("rotate270");
                        for(var i = 0; i<rotate270.length; i++){
                           if(!rotate270[i].classList.contains("dispbord"))
                              rotate270[i].style.transform = "rotate(0deg)";
                     }
                     var classes = document.getElementById(imgid.id);
                     var class1 = classes.className.split(' ')[1];
                     var class2 = classes.className.split(' ')[2];
                     var class3 = classes.className.split(' ')[3];
                     var class4 = classes.className.split(' ')[4];
                     var c = document.getElementsByClassName('c');
                     for(var i=0;i<c.length;i++){
                        c[i].id=imgid.id;
                     }
                     $('.X').click(function() {
                        var img = document.getElementsByClassName("disp");
                     for(var i = 0; i<img.length; i++){
                        img[i].style.display="none";
                     }
                     var a = document.getElementsByClassName("c");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="none";
                     }
                     var allC=document.getElementsByClassName("c");
                     for(var i=0;i<allC.length;i++){
                     allC[i].style.borderColor="white";
                     }
                  });
                     var img = document.getElementsByClassName("disp");
                     for(var i = 0; i<img.length; i++){
                        img[i].style.display="none";
                     }
                     var a = document.getElementsByClassName("c");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="none";
                     }
                     var allC=document.getElementsByClassName("c");
                     for(var i=0;i<allC.length;i++){
                     allC[i].style.borderColor="white";
                     }
                    
                     $('#ModalCenter #close').click();

                     function repeatText() {
                        for(var i = 0; i<img.length; i++){
                        img[i].style.display="block";
                        img[i].src="images/center/"+imgid.id+"_1.png";
                        }
                        for(var i = 0; i<img1.length; i++){
                           img1[i].style.display="block";
                           img1[i].src="images/center/"+imgid.id+"_2.png";
                        }
                        if(class1=="3"){
                        for(var i = 0; i<img2.length; i++){
                           img2[i].style.display="block"; 
                           img2[i].src="images/center/"+imgid.id+"_3.png";
                        }
                        if(class2=="4"){
                        for(var i = 0; i<img3.length; i++){
                           img3[i].style.display="block";
                           img3[i].src="images/center/"+imgid.id+"_4.png";
                        }
                        if(class3=="5"){
                        for(var i = 0; i<img4.length; i++){
                           img4[i].style.display="block";
                           img4[i].src="images/center/"+imgid.id+"_5.png";
                        }
                        if(class4=="6"){
                        for(var i = 0; i<img4.length; i++){
                           img5[i].style.display="block";
                           img5[i].src="images/center/"+imgid.id+"_6.png";
                        }
                        }
                        }
                        }
                        }
                     }

                     var img = document.getElementsByClassName("img");
                     var img1 = document.getElementsByClassName("img_1");                     
                     var img2 = document.getElementsByClassName("img_2");
                     var img3 = document.getElementsByClassName("img_3");
                     var img4 = document.getElementsByClassName("img_4");
                     var img5 = document.getElementsByClassName("img_5");
                     repeatText();

                     var img = document.getElementsByClassName("img2");
                     var img1 = document.getElementsByClassName("img2_1");
                     var img2 = document.getElementsByClassName("img2_2");
                     var img3 = document.getElementsByClassName("img2_3");
                     var img4 = document.getElementsByClassName("img2_4");
                     var img5 = document.getElementsByClassName("img2_5");
                     repeatText();
                     
                     var img = document.getElementsByClassName("img3");
                     var img1 = document.getElementsByClassName("img3_1");
                     var img2 = document.getElementsByClassName("img3_2");
                     var img3 = document.getElementsByClassName("img3_3");
                     var img4 = document.getElementsByClassName("img3_4");
                     var img5 = document.getElementsByClassName("img3_5");
                     repeatText();

                     var img = document.getElementsByClassName("img4");            
                     var img1 = document.getElementsByClassName("img4_1");
                     var img2 = document.getElementsByClassName("img4_2");
                     var img3 = document.getElementsByClassName("img4_3");
                     var img4 = document.getElementsByClassName("img4_4");
                     var img5 = document.getElementsByClassName("img4_5");
                     repeatText();

                     var norotate = classes.className.split(' ')[5];
                     if(norotate!="norotate"){
                        var rotate90 = document.getElementsByClassName("rotate90");
                        for(var i = 0; i<rotate90.length; i++){
                           rotate90[i].style.transform = "rotate(90deg)";
                        }

                        var rotate180 = document.getElementsByClassName("rotate180");
                        for(var i = 0; i<rotate180.length; i++){
                           rotate180[i].style.transform = "rotate(180deg)";
                        }

                        var rotate270 = document.getElementsByClassName("rotate270");
                        for(var i = 0; i<rotate270.length; i++){
                           rotate270[i].style.transform = "rotate(270deg)";
                        }
                     }

                     var a = document.getElementsByClassName("center1");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/center/"+imgid.id+"_1.png";
                     }
                     var a = document.getElementsByClassName("center2");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/center/"+imgid.id+"_2.png";
                     }
                     if(class1=="3"){
                     var a = document.getElementsByClassName("center3");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/center/"+imgid.id+"_3.png";
                     }
                     if(class2=="4"){
                     var a = document.getElementsByClassName("center4");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/center/"+imgid.id+"_4.png";
                     }
                     if(class3=="5"){
                     var a = document.getElementsByClassName("center5");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/center/"+imgid.id+"_5.png";
                     }
                     if(class4=="6"){
                     var a = document.getElementsByClassName("center6");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/center/"+imgid.id+"_6.png";
                     }}}}}

                     $('.Y').click(function() {
                        var squareColor = document.getElementById("squareColor");
                        if(squareColor.style.borderColor=="red"){
                           squareColor.style.borderColor="#ccc";
                           squareColor.style.backgroundColor="#fff";
                           var elements = document.getElementsByClassName("col-12");
                           for(var i = 0; i<elements.length; i++){
                              elements[i].style.backgroundColor="rgba(0, 0, 0, 0)";
                           }
                           var corner=document.getElementsByClassName("corn");    
                           if(corner[0].style.display=="none"){
                              var appear = document.getElementsByClassName("appear");
                              for(var i = 0; i<appear.length; i++){
                                 appear[i].style.display="block";
                              }
                           }
                        }
                        var center1 = document.getElementsByClassName("center1");
                        if(center1[0].style.borderColor=="red"){
                           center1[0].style.borderColor="white";
                           center1[0].src="images/center/"+center1[0].id+"_1.png";
                           function repeatTextimg() {
                              for(var i = 0; i<img.length; i++){
                              img[i].src="images/center/"+center1[0].id+"_1.png";
                              }
                           }
                           var img = document.getElementsByClassName("img");
                           repeatTextimg();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var img = document.getElementsByClassName("img2");
                           repeatTextimg();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var img = document.getElementsByClassName("img3");
                           repeatTextimg();
                           var img = document.getElementsByClassName("img4");            
                           repeatTextimg();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        var center2 = document.getElementsByClassName("center2");
                        if(center2[0].style.borderColor=="red"){
                           center2[0].style.borderColor="white";
                           center2[0].src="images/center/"+center2[0].id+"_2.png";
                           function repeatTextimg1() {
                              for(var i = 0; i<img2.length; i++){
                              img2[i].src="images/center/"+center2[0].id+"_2.png";
                              }
                           }
                           var img2 = document.getElementsByClassName("img_1");
                           repeatTextimg1();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var img2 = document.getElementsByClassName("img2_1");
                           repeatTextimg1();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var img2 = document.getElementsByClassName("img3_1");
                           repeatTextimg1();
                           var img2 = document.getElementsByClassName("img4_1");            
                           repeatTextimg1();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class1=="3"){
                        var center3 = document.getElementsByClassName("center3");
                        if(center3[0].style.borderColor=="red"){
                           center3[0].style.borderColor="white";
                           center3[0].src="images/center/"+center3[0].id+"_3.png";
                           function repeatTextimg2() {
                              for(var i = 0; i<img3.length; i++){
                              img3[i].src="images/center/"+center3[0].id+"_3.png";
                              }
                           }
                           var img3 = document.getElementsByClassName("img_2");
                           repeatTextimg2();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var img3 = document.getElementsByClassName("img2_2");
                           repeatTextimg2();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var img3 = document.getElementsByClassName("img3_2");
                           repeatTextimg2();
                           var img3 = document.getElementsByClassName("img4_2");            
                           repeatTextimg2();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class2=="4"){
                        var center4 = document.getElementsByClassName("center4");
                        if(center4[0].style.borderColor=="red"){
                           center4[0].style.borderColor="white";
                           center4[0].src="images/center/"+center4[0].id+"_4.png";
                           function repeatTextimg3() {
                              for(var i = 0; i<img4.length; i++){
                              img4[i].src="images/center/"+center4[0].id+"_4.png";
                              }
                           }
                           var img4 = document.getElementsByClassName("img_3");
                           repeatTextimg3();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var img4 = document.getElementsByClassName("img2_3");
                           repeatTextimg3();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var img4 = document.getElementsByClassName("img3_3");
                           repeatTextimg3();
                           var img4 = document.getElementsByClassName("img4_3");            
                           repeatTextimg3();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class3=="5"){
                        var center5 = document.getElementsByClassName("center5");
                        if(center5[0].style.borderColor=="red"){
                           center5[0].style.borderColor="white";
                           center5[0].src="images/center/"+center5[0].id+"_5.png";
                           function repeatTextimg4() {
                              for(var i = 0; i<img5.length; i++){
                              img5[i].src="images/center/"+center5[0].id+"_5.png";
                              }
                           }
                           var img5 = document.getElementsByClassName("img_4");
                           repeatTextimg4();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var img5 = document.getElementsByClassName("img2_4");
                           repeatTextimg4();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var img5 = document.getElementsByClassName("img3_4");
                           repeatTextimg4();
                           var img5 = document.getElementsByClassName("img4_4");            
                           repeatTextimg4();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class4=="6"){
                        var center6 = document.getElementsByClassName("center6");
                        if(center6[0].style.borderColor=="red"){
                           center6[0].style.borderColor="white";
                           center6[0].src="images/center/"+center6[0].id+"_6.png";
                           function repeatTextimg5() {
                              for(var i = 0; i<img6.length; i++){
                              img6[i].src="images/center/"+center6[0].id+"_6.png";
                              }
                           }
                           var img6 = document.getElementsByClassName("img_5");
                           repeatTextimg5();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var img6 = document.getElementsByClassName("img2_5");
                           repeatTextimg5();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var img6 = document.getElementsByClassName("img3_5");
                           repeatTextimg5();
                           var img6 = document.getElementsByClassName("img4_5");            
                           repeatTextimg5();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }}}}}}
                  });
               }
               function getIdBorder(imgid){
                  var emptyState = document.getElementById('canvasEmpty');
                  if (emptyState) emptyState.style.display = 'none';
                  var classes = document.getElementById(imgid.id);
                  var class1 = classes.className.split(' ')[1];
                  var class2 = classes.className.split(' ')[2];
                  var class3 = classes.className.split(' ')[3];
                  var class4 = classes.className.split(' ')[3];
                  var b = document.getElementsByClassName('b');
                     for(var i=0;i<b.length;i++){
                        b[i].id=imgid.id;
                     }
                  $('.XBorder').click(function() {
                        var img = document.getElementsByClassName("dispbord");
                     for(var i = 0; i<img.length; i++){
                        img[i].style.display="none";
                     }
                   
                     var a = document.getElementsByClassName("b");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="none";
                     }
                     var elements = document.getElementsByClassName("col-12");
                     if(window.getComputedStyle(elements[0]).backgroundColor=="rgba(0, 0, 0, 0)"){
                        var appear = document.getElementsByClassName("appear");
                        for(var i = 0; i<appear.length; i++){
                           appear[i].style.display="block";
                        }
                     }
                     else{
                        var appear = document.getElementsByClassName("appear");
                        for(var i = 0; i<appear.length; i++){
                           appear[i].style.display="none";
                        }
                     }
                     });
                     var img = document.getElementsByClassName("dispbord");
                     for(var i = 0; i<img.length; i++){
                        img[i].style.display="none";
                     }
                     var a = document.getElementsByClassName("b");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="none";
                     }
                     
                     $('#ModalBorder #close').click();
                     var appear = document.getElementsByClassName("appear");
                     for(var i = 0; i<appear.length; i++){
                        appear[i].style.display="none";
                     }
                    
                     function repeatText() {
                        for(var i = 0; i<img.length; i++){
                        img[i].style.display="block";
                        img[i].src="images/border/"+imgid.id+"_1.png";
                     }
                     for(var i = 0; i<img1.length; i++){
                        img1[i].style.display="block";
                        img1[i].src="images/border/"+imgid.id+"_2.png";
                     }
                     if(class1=="3"){
                     for(var i = 0; i<img2.length; i++){
                        img2[i].style.display="block";
                        img2[i].src="images/border/"+imgid.id+"_3.png";
                     }
                     if(class2=="4"){
                     for(var i = 0; i<img3.length; i++){
                        img3[i].style.display="block";
                        img3[i].src="images/border/"+imgid.id+"_4.png";
                     }
                     if(class3=="5"){
                     for(var i = 0; i<img4.length; i++){
                        img4[i].style.display="block";
                        img4[i].src="images/border/"+imgid.id+"_5.png";
                     }
                     if(class4=="6"){
                     for(var i = 0; i<img5.length; i++){
                        img5[i].style.display="block";
                        img5[i].src="images/border/"+imgid.id+"_6.png";
                     }
                     }
                     }
                     }
                     }}

                     var img = document.getElementsByClassName("bord");                     
                     var img1 = document.getElementsByClassName("bord_1");
                     var img2 = document.getElementsByClassName("bord_2");                     
                     var img3 = document.getElementsByClassName("bord_3");
                     var img4 = document.getElementsByClassName("bord_4");
                     var img5 = document.getElementsByClassName("bord_5");
                     repeatText();
                     var rotate270 = document.getElementsByClassName("rotate270");
                     for(var i = 0; i<rotate270.length; i++){
                        rotate270[i].style.transform = "rotate(270deg)";
                     }
                     
                     var img = document.getElementsByClassName("bord2");                     
                     var img1 = document.getElementsByClassName("bord2_1");
                     var img2 = document.getElementsByClassName("bord2_2");                     
                     var img3 = document.getElementsByClassName("bord2_3");
                     var img4 = document.getElementsByClassName("bord2_4");
                     var img5 = document.getElementsByClassName("bord2_5");
                     repeatText();
                     var rotate90 = document.getElementsByClassName("rotate90");
                     for(var i = 0; i<rotate90.length; i++){
                        rotate90[i].style.transform = "rotate(90deg)";
                     }

                     var img = document.getElementsByClassName("bord3");                     
                     var img1 = document.getElementsByClassName("bord3_1");
                     var img2 = document.getElementsByClassName("bord3_2");                     
                     var img3 = document.getElementsByClassName("bord3_3");
                     var img4 = document.getElementsByClassName("bord3_4");
                     var img5 = document.getElementsByClassName("bord3_5");
                     repeatText();
                     var rotate180 = document.getElementsByClassName("rotate180");
                     for(var i = 0; i<rotate180.length; i++){
                        rotate180[i].style.transform = "rotate(180deg)";
                     }
                 
                     var img = document.getElementsByClassName("bord4");                     
                     var img1 = document.getElementsByClassName("bord4_1");
                     var img2 = document.getElementsByClassName("bord4_2");                     
                     var img3 = document.getElementsByClassName("bord4_3");
                     var img4 = document.getElementsByClassName("bord4_4");
                     var img5 = document.getElementsByClassName("bord4_5");
                     repeatText();  

                     function repeatTextcorn() {
                        for(var i = 0; i<img.length; i++){
                        img[i].style.display="block";
                        img[i].src="images/border/"+imgid.id+"_1corner.png";
                     }
                     for(var i = 0; i<img1.length; i++){
                        img1[i].style.display="block";
                        img1[i].src="images/border/"+imgid.id+"_2corner.png";
                     }
                     if(class1=="3"){
                     for(var i = 0; i<img2.length; i++){
                        img2[i].style.display="block";
                        img2[i].src="images/border/"+imgid.id+"_3corner.png";
                     }
                     if(class2=="4"){
                     for(var i = 0; i<img3.length; i++){
                        img3[i].style.display="block";
                        img3[i].src="images/border/"+imgid.id+"_4corner.png";
                     }
                     if(class3=="5"){
                     for(var i = 0; i<img4.length; i++){
                        img4[i].style.display="block";
                        img4[i].src="images/border/"+imgid.id+"_5corner.png";
                     }
                     if(class4=="6"){
                     for(var i = 0; i<img5.length; i++){
                        img5[i].style.display="block";
                        img5[i].src="images/border/"+imgid.id+"_6corner.png";
                     }
                     }
                     }
                     }
                     }}
                     var img = document.getElementsByClassName("corn");                     
                     var img1 = document.getElementsByClassName("corn_1");
                     var img2 = document.getElementsByClassName("corn_2");                     
                     var img3 = document.getElementsByClassName("corn_3");
                     var img4 = document.getElementsByClassName("corn_4");
                     var img5 = document.getElementsByClassName("corn_5");
                     repeatTextcorn();  
                     var rotate90 = document.getElementsByClassName("rotate90");
                     for(var i = 0; i<rotate90.length; i++){
                        rotate90[i].style.transform = "rotate(90deg)";
                     }

                     var img = document.getElementsByClassName("corn2");                     
                     var img1 = document.getElementsByClassName("corn2_1");
                     var img2 = document.getElementsByClassName("corn2_2");                     
                     var img3 = document.getElementsByClassName("corn2_3");
                     var img4 = document.getElementsByClassName("corn2_4");
                     var img5 = document.getElementsByClassName("corn2_5");
                     repeatTextcorn();  
                     var rotate180 = document.getElementsByClassName("rotate180");
                     for(var i = 0; i<rotate180.length; i++){
                        rotate180[i].style.transform = "rotate(180deg)";
                     }

                     var img = document.getElementsByClassName("corn3");                     
                     var img1 = document.getElementsByClassName("corn3_1");
                     var img2 = document.getElementsByClassName("corn3_2");                     
                     var img3 = document.getElementsByClassName("corn3_3");
                     var img4 = document.getElementsByClassName("corn3_4");
                     var img5 = document.getElementsByClassName("corn3_5");
                     repeatTextcorn();

                     var img = document.getElementsByClassName("corn4");                     
                     var img1 = document.getElementsByClassName("corn4_1");
                     var img2 = document.getElementsByClassName("corn4_2");                     
                     var img3 = document.getElementsByClassName("corn4_3");
                     var img4 = document.getElementsByClassName("corn4_4");
                     var img5 = document.getElementsByClassName("corn4_5");
                     repeatTextcorn();  
                     var rotate270 = document.getElementsByClassName("rotate270");

                     for(var i = 0; i<rotate270.length; i++){
                        rotate270[i].style.transform = "rotate(270deg)";
                     }
                     var a = document.getElementsByClassName("border1");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/border/"+imgid.id+"_1.png";
                     }
                     var a = document.getElementsByClassName("border2");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/border/"+imgid.id+"_2.png";
                     }
                     if(class1=="3"){
                     var a = document.getElementsByClassName("border3");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/border/"+imgid.id+"_3.png";
                     }
                     if(class2=="4"){
                     var a = document.getElementsByClassName("border4");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/border/"+imgid.id+"_4.png";
                     }
                     if(class3=="5"){
                     var a = document.getElementsByClassName("border5");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/border/"+imgid.id+"_5.png";
                     }
                     if(class4=="6"){
                     var a = document.getElementsByClassName("border6");
                     for(var i = 0; i<a.length; i++){
                        a[i].style.display="block";
                        a[i].src="images/border/"+imgid.id+"_6.png";
                     }}}}}
                     
                     $('.Y').click(function() {
                        var squareColor = document.getElementById("squareColor");
                        if(squareColor.style.borderColor=="red"){
                           squareColor.style.borderColor="#ccc";
                           squareColor.style.backgroundColor="#fff";
                           var elements = document.getElementsByClassName("col-12");
                           for(var i = 0; i<elements.length; i++){
                              elements[i].style.backgroundColor="rgba(0, 0, 0, 0)";
                           }
                           var corner=document.getElementsByClassName("corn");    
                           if(corner[0].style.display=="none"){
                              var appear = document.getElementsByClassName("appear");
                              for(var i = 0; i<appear.length; i++){
                                 appear[i].style.display="block";
                              }
                           }
                        }
                        var border1 = document.getElementsByClassName("border1");
                        if(border1[0].style.borderColor=="red"){
                           border1[0].style.borderColor="white";
                           border1[0].src="images/border/"+border1[0].id+"_1.png";
                           function repeatTextbord() {
                              for(var i = 0; i<bord.length; i++){
                              bord[i].src="images/border/"+border1[0].id+"_1.png";
                              }
                           }
                           function repeatTextcorn() {
                              for(var i = 0; i<corn.length; i++){
                              corn[i].src="images/border/"+border1[0].id+"_1corner.png";
                              }
                           }
                           var bord = document.getElementsByClassName("bord");
                           repeatTextbord();
                           var corn = document.getElementsByClassName("corn");
                           repeatTextcorn();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var bord = document.getElementsByClassName("bord2");
                           repeatTextbord();
                           var corn = document.getElementsByClassName("corn2");
                           repeatTextcorn();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var bord = document.getElementsByClassName("bord3");
                           repeatTextbord();
                           var corn = document.getElementsByClassName("corn3");
                           repeatTextcorn();
                           var bord = document.getElementsByClassName("bord4");            
                           repeatTextbord();
                           var corn = document.getElementsByClassName("corn4");
                           repeatTextcorn();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        var border2 = document.getElementsByClassName("border2");
                        if(border2[0].style.borderColor=="red"){
                           border2[0].style.borderColor="white";
                           border2[0].src="images/border/"+border2[0].id+"_2.png";
                           function repeatTextbord1() {
                              for(var i = 0; i<bord2.length; i++){
                              bord2[i].src="images/border/"+border2[0].id+"_2.png";
                              }
                           }
                           function repeatTextcorn1() {
                              for(var i = 0; i<corn2.length; i++){
                              corn2[i].src="images/border/"+border2[0].id+"_2corner.png";
                              }
                           }
                           var bord2 = document.getElementsByClassName("bord_1");
                           repeatTextbord1();
                           var corn2 = document.getElementsByClassName("corn_1");
                           repeatTextcorn1();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var bord2 = document.getElementsByClassName("bord2_1");
                           repeatTextbord1();
                           var corn2 = document.getElementsByClassName("corn2_1");
                           repeatTextcorn1();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var bord2 = document.getElementsByClassName("bord3_1");
                           repeatTextbord1();
                           var corn2 = document.getElementsByClassName("corn3_1");
                           repeatTextcorn1();

                           var bord2 = document.getElementsByClassName("bord4_1");            
                           repeatTextbord1();
                           var corn2 = document.getElementsByClassName("corn4_1");
                           repeatTextcorn1();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class1=="3"){
                        var border3 = document.getElementsByClassName("border3");
                        if(border3[0].style.borderColor=="red"){
                           border3[0].style.borderColor="white";
                           border3[0].src="images/border/"+border3[0].id+"_3.png";
                           function repeatTextbord2() {
                              for(var i = 0; i<bord3.length; i++){
                              bord3[i].src="images/border/"+border3[0].id+"_3.png";
                              }
                           }
                           function repeatTextcorn2() {
                              for(var i = 0; i<corn3.length; i++){
                              corn3[i].src="images/border/"+border2[0].id+"_3corner.png";
                              }
                           }
                           var bord3 = document.getElementsByClassName("bord_2");
                           repeatTextbord2();
                           var corn3 = document.getElementsByClassName("corn_2");
                           repeatTextcorn2();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var bord3 = document.getElementsByClassName("bord2_2");
                           repeatTextbord2();
                           var corn3 = document.getElementsByClassName("corn2_2");
                           repeatTextcorn2();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var bord3 = document.getElementsByClassName("bord3_2");
                           repeatTextbord2();
                           var corn3 = document.getElementsByClassName("corn3_2");
                           repeatTextcorn2();
                           var bord3 = document.getElementsByClassName("bord4_2");            
                           repeatTextbord2();
                           var corn3 = document.getElementsByClassName("corn4_2");
                           repeatTextcorn2();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class2=="4"){
                        var border4 = document.getElementsByClassName("border4");
                        if(border4[0].style.borderColor=="red"){
                           border4[0].style.borderColor="white";
                           border4[0].src="images/border/"+border4[0].id+"_4.png";
                           function repeatTextbord3() {
                              for(var i = 0; i<bord4.length; i++){
                              bord4[i].src="images/border/"+border4[0].id+"_4.png";
                              }
                           }
                           function repeatTextcorn3() {
                              for(var i = 0; i<corn4.length; i++){
                              corn4[i].src="images/border/"+border4[0].id+"_4corner.png";
                              }
                           }
                           var bord4 = document.getElementsByClassName("bord_3");
                           repeatTextbord3();
                           var corn4 = document.getElementsByClassName("corn_3");
                           repeatTextcorn3();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var bord4 = document.getElementsByClassName("bord2_3");
                           repeatTextbord3();
                           var corn4 = document.getElementsByClassName("corn2_3");
                           repeatTextcorn3();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var bord4 = document.getElementsByClassName("bord3_3");
                           repeatTextbord3();
                           var corn4 = document.getElementsByClassName("corn3_3");
                           repeatTextcorn3();
                           var bord4 = document.getElementsByClassName("bord4_3");            
                           repeatTextbord3();
                           var corn4 = document.getElementsByClassName("corn4_3");
                           repeatTextcorn3();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class3=="5"){
                        var border5 = document.getElementsByClassName("border5");
                        if(border5[0].style.borderColor=="red"){
                           border5[0].style.borderColor="white";
                           border5[0].src="images/border/"+border5[0].id+"_5.png";
                           function repeatTextbord4() {
                              for(var i = 0; i<bord5.length; i++){
                              bord5[i].src="images/border/"+border5[0].id+"_5.png";
                              }
                           }
                           function repeatTextcorn4() {
                              for(var i = 0; i<corn5.length; i++){
                              corn5[i].src="images/border/"+border5[0].id+"_5corner.png";
                              }
                           }
                           var bord5 = document.getElementsByClassName("bord_4");
                           repeatTextbord4();
                           var corn5 = document.getElementsByClassName("corn_4");
                           repeatTextcorn4();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var bord5 = document.getElementsByClassName("bord2_4");
                           repeatTextbord4();
                           var corn5 = document.getElementsByClassName("corn2_4");
                           repeatTextcorn4();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var bord5 = document.getElementsByClassName("bord3_4");
                           repeatTextbord4();
                           var corn5 = document.getElementsByClassName("corn3_4");
                           repeatTextcorn4();
                           var bord5 = document.getElementsByClassName("bord4_4");            
                           repeatTextbord4();
                           var corn5 = document.getElementsByClassName("corn4_4");
                           repeatTextcorn4();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }
                        }
                        if(class4=="6"){
                        var border6 = document.getElementsByClassName("border6");
                        if(border6[0].style.borderColor=="red"){
                           border6[0].style.borderColor="white";
                           border6[0].src="images/border/"+border6[0].id+"_6.png";
                           function repeatTextbord5() {
                              for(var i = 0; i<bord6.length; i++){
                              bord6[i].src="images/border/"+border6[0].id+"_6.png";
                              }
                           }
                           function repeatTextcorn5() {
                              for(var i = 0; i<corn6.length; i++){
                              corn6[i].src="images/border/"+border6[0].id+"_6corner.png";
                              }
                           }
                           var bord6 = document.getElementsByClassName("bord_5");
                           repeatTextbord5();
                           var corn6 = document.getElementsByClassName("corn_5");
                           repeatTextcorn5();
                           var rotate90 = document.getElementsByClassName("rotate90");
                           for(var i = 0; i<rotate90.length; i++){
                              rotate90[i].style.transform = "rotate(90deg)";
                           }
                           var bord6 = document.getElementsByClassName("bord2_5");
                           repeatTextbord5();
                           var corn6 = document.getElementsByClassName("corn2_5");
                           repeatTextcorn5();
                           var rotate180 = document.getElementsByClassName("rotate180");
                           for(var i = 0; i<rotate180.length; i++){
                              rotate180[i].style.transform = "rotate(180deg)";
                           }
                           var bord6 = document.getElementsByClassName("bord3_5");
                           repeatTextbord5();
                           var corn6 = document.getElementsByClassName("corn3_5");
                           repeatTextcorn5();
                           var bord6 = document.getElementsByClassName("bord4_5");            
                           repeatTextbord5();
                           var corn6 = document.getElementsByClassName("corn4_5");
                           repeatTextcorn5();
                           var rotate270 = document.getElementsByClassName("rotate270");
                           for(var i = 0; i<rotate270.length; i++){
                              rotate270[i].style.transform = "rotate(270deg)";
                           }}}}}}
                  });
            }
         </script>
         <script type="text/javascript">
         $('.squareColor').click(function(){
            var squareColor=$(this);
            squareColor[0].style.borderColor="red";
            var allC=document.getElementsByClassName("c");
            for(var i=0;i<allC.length;i++){
            allC[i].style.borderColor="white";
            }
            var allB=document.getElementsByClassName("b");
            for(var i=0;i<allB.length;i++){
            allB[i].style.borderColor="white";
            }
         });
         $('.c').click(function(){
            var c=$(this);
            var allC=document.getElementsByClassName("c");
            for(var i=0;i<allC.length;i++){
            allC[i].style.borderColor="white";
            }
            var allB=document.getElementsByClassName("b");
            for(var i=0;i<allB.length;i++){
            allB[i].style.borderColor="white";
            }
            c[0].style.borderColor="red";
            var squareColor=document.getElementsByClassName("squareColor");
            squareColor[0].style.borderColor="#ccc";
         });
         $('.b').click(function(){
            var b=$(this);
            var allB=document.getElementsByClassName("b");
            for(var i=0;i<allB.length;i++){
            allB[i].style.borderColor="white";
            }
            var allC=document.getElementsByClassName("c");
            for(var i=0;i<allC.length;i++){
            allC[i].style.borderColor="white";
            }
            b[0].style.borderColor="red";
            var squareColor=document.getElementsByClassName("squareColor");
            squareColor[0].style.borderColor="#ccc";
         });
         $('.Y').click(function() {
            var squareColor = document.getElementById("squareColor");
            if(squareColor.style.borderColor=="red"){
               squareColor.style.borderColor="#ccc";
               squareColor.style.backgroundColor="#fff";
               var elements = document.getElementsByClassName("col-12");
               for(var i = 0; i<elements.length; i++){
                  elements[i].style.backgroundColor="rgba(0, 0, 0, 0)";
               }
               var corner=document.getElementsByClassName("corn");    
               if(corner[0].style.display!="block"){
                  var appear = document.getElementsByClassName("appear");
                  for(var i = 0; i<appear.length; i++){
                     appear[i].style.display="block";
                  }
               }
            }
         });
         $('.wrapperColor').click(function() {
            
            var obj = $(this);
            var squareColor=document.getElementById("squareColor");
               if(squareColor.style.borderColor=="red"){
                  let color = window.getComputedStyle(obj[0]).backgroundColor;
                  squareColor.style.backgroundColor=color;
                  var elements = document.getElementsByClassName("col-12");
                  for(var i = 0; i<elements.length; i++){
                  elements[i].style.backgroundColor=color;}
                  
                  var appear = document.getElementsByClassName("appear");
                  for(var i = 0; i<appear.length; i++){
                     appear[i].style.display="none";
                  }
            }

            var c = document.getElementsByClassName("c");
            for(var i=0;i<c.length;i++){
            if(c[i].style.borderColor=="red"){
            var c = document.getElementsByClassName("c");
            var classes = document.getElementById(c[0].id);
            var class1 = classes.className.split(' ')[1];
            var class2 = classes.className.split(' ')[2];
            var class3 = classes.className.split(' ')[3];
            var class4 = classes.className.split(' ')[4];
            var center1=document.getElementsByClassName("center1");
            if(center1[0].style.borderColor=="red"){
            function repeatTextimg() {
               center1[0].src="images/center/"+c[0].id+"_1"+obj[0].id+".png";
               for(var i = 0; i<img.length; i++){
               img[i].src="images/center/"+c[0].id+"_1"+obj[0].id+".png";
               }
            }
               var img = document.getElementsByClassName("img");
            repeatTextimg();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var img = document.getElementsByClassName("img2");
            repeatTextimg();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var img = document.getElementsByClassName("img3");
            repeatTextimg();
            var img = document.getElementsByClassName("img4");            
            repeatTextimg();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
            }
            var center2=document.getElementsByClassName("center2");
            if(center2[0].style.borderColor=="red"){
            function repeatTextimg2() {
               center2[0].src="images/center/"+c[0].id+"_2"+obj[0].id+".png";
               for(var i = 0; i<img1.length; i++){
               img1[i].src="images/center/"+c[0].id+"_2"+obj[0].id+".png";
               }
            }
            var img1 = document.getElementsByClassName("img_1");
            repeatTextimg2();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var img1 = document.getElementsByClassName("img2_1");
            repeatTextimg2();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var img1 = document.getElementsByClassName("img3_1");
            repeatTextimg2();
            var img1 = document.getElementsByClassName("img4_1");            
            repeatTextimg2();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(class1=="3"){
            var center3=document.getElementsByClassName("center3");
            if(center3[0].style.borderColor=="red"){
            function repeatTextimg2() {
               center3[0].src="images/center/"+c[0].id+"_3"+obj[0].id+".png";
               for(var i = 0; i<img2.length; i++){
               img2[i].src="images/center/"+c[0].id+"_3"+obj[0].id+".png";
               }
            }
            var img2 = document.getElementsByClassName("img_2");
            repeatTextimg2();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var img2 = document.getElementsByClassName("img2_2");
            repeatTextimg2();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var img2 = document.getElementsByClassName("img3_2");
            repeatTextimg2();
            var img2 = document.getElementsByClassName("img4_2");            
            repeatTextimg2();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(class2=="4"){
            var center4=document.getElementsByClassName("center4");
            if(center4[0].style.borderColor=="red"){
            function repeatTextimg3() {
               center4[0].src="images/center/"+c[0].id+"_4"+obj[0].id+".png";
               for(var i = 0; i<img3.length; i++){
               img3[i].src="images/center/"+c[0].id+"_4"+obj[0].id+".png";
               }
            }
            var img3 = document.getElementsByClassName("img_3");
            repeatTextimg3();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var img3 = document.getElementsByClassName("img2_3");
            repeatTextimg3();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var img3 = document.getElementsByClassName("img3_3");
            repeatTextimg3();
            var img3 = document.getElementsByClassName("img4_3");            
            repeatTextimg3();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(class3=="5"){
            var center5=document.getElementsByClassName("center5");
            if(center5[0].style.borderColor=="red"){
            function repeatTextimg4() {
               center5[0].src="images/center/"+c[0].id+"_5"+obj[0].id+".png";
               for(var i = 0; i<img4.length; i++){
               img4[i].src="images/center/"+c[0].id+"_5"+obj[0].id+".png";
               }
            }
            var img4 = document.getElementsByClassName("img_4");
            repeatTextimg4();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var img4 = document.getElementsByClassName("img2_4");
            repeatTextimg4();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var img4 = document.getElementsByClassName("img3_4");
            repeatTextimg4();
            var img4 = document.getElementsByClassName("img4_4");            
            repeatTextimg4();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(class4=="6"){
            var center6=document.getElementsByClassName("center6");
            if(center6[0].style.borderColor=="red"){
            function repeatTextimg5() {
               center6[0].src="images/center/"+c[0].id+"_6"+obj[0].id+".png";
               for(var i = 0; i<img5.length; i++){
               img5[i].src="images/center/"+c[0].id+"_6"+obj[0].id+".png";
               }
            }
            var img5 = document.getElementsByClassName("img_5");
            repeatTextimg5();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var img5 = document.getElementsByClassName("img2_5");
            repeatTextimg5();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var img5 = document.getElementsByClassName("img3_5");
            repeatTextimg5();
            var img5 = document.getElementsByClassName("img4_5");            
            repeatTextimg5();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }}}}}}
         }}
         var b=document.getElementsByClassName("b");
         for(var i=0;i<b.length;i++){
            if(b[i].style.borderColor=="red"){
            var b=document.getElementsByClassName("b");
            var borders = document.getElementById(b[0].id);
            var bdr1 = borders.className.split(' ')[1];
            var bdr2 = borders.className.split(' ')[2];
            var bdr3 = borders.className.split(' ')[3];
            var bdr4 = borders.className.split(' ')[4];
            var border1=document.getElementsByClassName("border1");
            if(border1[0].style.borderColor=="red"){
            border1[0].src="images/border/"+b[0].id+"_1"+obj[0].id+".png";
            function repeatTextbord() {
               for(var i = 0; i<bord.length; i++){
               bord[i].src="images/border/"+b[0].id+"_1"+obj[0].id+".png";
               }
            }
            function repeatTextcorn() {
               for(var i = 0; i<corn.length; i++){
               corn[i].src="images/border/"+b[0].id+"_1corner"+obj[0].id+".png";
               }
            }
            var bord = document.getElementsByClassName("bord");
            repeatTextbord();
            var corn = document.getElementsByClassName("corn");
            repeatTextcorn();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var bord = document.getElementsByClassName("bord2");
            repeatTextbord();
            var corn = document.getElementsByClassName("corn2");
            repeatTextcorn();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var bord = document.getElementsByClassName("bord3");
            repeatTextbord();
            var corn = document.getElementsByClassName("corn3");
            repeatTextcorn();
            var bord = document.getElementsByClassName("bord4");      
            repeatTextbord();
            var corn = document.getElementsByClassName("corn4");
            repeatTextcorn();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
            }
            var border2=document.getElementsByClassName("border2");
            if(border2[0].style.borderColor=="red"){
            border2[0].src="images/border/"+b[0].id+"_2"+obj[0].id+".png";
            function repeatTextbord1() {
               for(var i = 0; i<bord1.length; i++){
               bord1[i].src="images/border/"+b[0].id+"_2"+obj[0].id+".png";
               }
            }
            function repeatTextcorn1() {
               for(var i = 0; i<corn1.length; i++){
               corn1[i].src="images/border/"+b[0].id+"_2corner"+obj[0].id+".png";
               }
            }
            var bord1 = document.getElementsByClassName("bord_1");
            repeatTextbord1();
            var corn1 = document.getElementsByClassName("corn_1");
            repeatTextcorn1();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var bord1 = document.getElementsByClassName("bord2_1");
            repeatTextbord1();
            var corn1 = document.getElementsByClassName("corn2_1");
            repeatTextcorn1();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var bord1 = document.getElementsByClassName("bord3_1");
            repeatTextbord1();
            var corn1 = document.getElementsByClassName("corn3_1");
            repeatTextcorn1();
            var bord1 = document.getElementsByClassName("bord4_1");            
            repeatTextbord1();
            var corn1 = document.getElementsByClassName("corn4_1");            
            repeatTextcorn1();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(bdr1=="3"){
            var border3=document.getElementsByClassName("border3");
            if(border3[0].style.borderColor=="red"){
            border3[0].src="images/border/"+b[0].id+"_3"+obj[0].id+".png";
            function repeatTextbord2() {
               for(var i = 0; i<bord2.length; i++){
               bord2[i].src="images/border/"+b[0].id+"_3"+obj[0].id+".png";
               }
            }
            function repeatTextcorn2() {
               for(var i = 0; i<corn2.length; i++){
               corn2[i].src="images/border/"+b[0].id+"_3corner"+obj[0].id+".png";
               }
            }
            var bord2 = document.getElementsByClassName("bord_2");
            repeatTextbord2();
            var corn2 = document.getElementsByClassName("corn_2");
            repeatTextcorn2();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var bord2 = document.getElementsByClassName("bord2_2");
            repeatTextbord2();
            var corn2 = document.getElementsByClassName("corn2_2");
            repeatTextcorn2();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var bord2 = document.getElementsByClassName("bord3_2");
            repeatTextbord2();
            var corn2 = document.getElementsByClassName("corn3_2");
            repeatTextcorn2();
            var bord2 = document.getElementsByClassName("bord4_2");            
            repeatTextbord2();
            var corn2 = document.getElementsByClassName("corn4_2");            
            repeatTextcorn2();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(bdr2=="4"){
            var border4=document.getElementsByClassName("border4");
            if(border4[0].style.borderColor=="red"){
            border4[0].src="images/border/"+b[0].id+"_4"+obj[0].id+".png";
            function repeatTextbord3() {
               for(var i = 0; i<bord3.length; i++){
               bord3[i].src="images/border/"+b[0].id+"_4"+obj[0].id+".png";
               }
            }
            function repeatTextcorn3() {
               for(var i = 0; i<corn3.length; i++){
               corn3[i].src="images/border/"+b[0].id+"_4corner"+obj[0].id+".png";
               }
            }
            var bord3 = document.getElementsByClassName("bord_3");
            repeatTextbord3();
            var corn3 = document.getElementsByClassName("corn_3");
            repeatTextcorn3();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var bord3 = document.getElementsByClassName("bord2_3");
            repeatTextbord3();
            var corn3 = document.getElementsByClassName("corn2_3");
            repeatTextcorn3();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var bord3 = document.getElementsByClassName("bord3_3");
            repeatTextbord3();
            var corn3 = document.getElementsByClassName("corn3_3");
            repeatTextcorn3();
            var bord3 = document.getElementsByClassName("bord4_3");            
            repeatTextbord3();
            var corn3 = document.getElementsByClassName("corn4_3");            
            repeatTextcorn3();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(bdr3=="5"){
            var border5=document.getElementsByClassName("border5");
            if(border5[0].style.borderColor=="red"){
            border5[0].src="images/border/"+b[0].id+"_5"+obj[0].id+".png";
            function repeatTextbord4() {
               for(var i = 0; i<bord4.length; i++){
               bord4[i].src="images/border/"+b[0].id+"_5"+obj[0].id+".png";
               }
            }
            function repeatTextcorn4() {
               for(var i = 0; i<corn4.length; i++){
               corn4[i].src="images/border/"+b[0].id+"_5corner"+obj[0].id+".png";
               }
            }
            var bord4 = document.getElementsByClassName("bord_4");
            repeatTextbord4();
            var corn4 = document.getElementsByClassName("corn_4");
            repeatTextcorn4();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var bord4 = document.getElementsByClassName("bord2_4");
            repeatTextbord4();
            var corn4 = document.getElementsByClassName("corn2_4");
            repeatTextcorn4();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var bord4 = document.getElementsByClassName("bord3_4");
            repeatTextbord4();
            var corn4 = document.getElementsByClassName("corn3_4");
            repeatTextcorn4();
            var bord4 = document.getElementsByClassName("bord4_4");            
            repeatTextbord4();
            var corn4 = document.getElementsByClassName("corn4_4");            
            repeatTextcorn4();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }
         }
         if(bdr4=="6"){
            var border6=document.getElementsByClassName("border6");
            if(border6[0].style.borderColor=="red"){

            border6[0].src="images/border/"+b[0].id+"_6"+obj[0].id+".png";
            function repeatTextbord5() {
               for(var i = 0; i<bord5.length; i++){
               bord5[i].src="images/border/"+b[0].id+"_6"+obj[0].id+".png";
               }
            }
            function repeatTextcorn5() {
               for(var i = 0; i<corn5.length; i++){
               corn5[i].src="images/border/"+b[0].id+"_6"+obj[0].id+".png";
               }
            }
            var bord5 = document.getElementsByClassName("bord_5");
            repeatTextbord5();
            var corn5 = document.getElementsByClassName("corn_5");
            repeatTextcorn5();
            var rotate90 = document.getElementsByClassName("rotate90");
            for(var i = 0; i<rotate90.length; i++){
               rotate90[i].style.transform = "rotate(90deg)";
            }
            var bord5 = document.getElementsByClassName("bord2_5");
            repeatTextbord5();
            var corn5 = document.getElementsByClassName("corn2_5");
            repeatTextcorn5();
            var rotate180 = document.getElementsByClassName("rotate180");
            for(var i = 0; i<rotate180.length; i++){
               rotate180[i].style.transform = "rotate(180deg)";
            }
            var bord5 = document.getElementsByClassName("bord3_5");
            repeatTextbord5();
            var corn5 = document.getElementsByClassName("corn3_5");
            repeatTextcorn5();
            var bord5 = document.getElementsByClassName("bord4_5");            
            repeatTextbord5();
            var corn5 = document.getElementsByClassName("corn4_5");            
            repeatTextcorn5();
            var rotate270 = document.getElementsByClassName("rotate270");
            for(var i = 0; i<rotate270.length; i++){
               rotate270[i].style.transform = "rotate(270deg)";
            }}}}}}}}
         });
      </script>

     <script>
         
         function showToast(msg, duration) {
            duration = duration || 3000;
            var t = document.getElementById('toast-msg');
            if (!t) {
               t = document.createElement('div');
               t.id = 'toast-msg';
               t.className = 'toast-msg';
               document.body.appendChild(t);
            }
            t.textContent = msg;
            t.classList.add('show');
            clearTimeout(t._timer);
            t._timer = setTimeout(function(){ t.classList.remove('show'); }, duration);
         }

         
         function refreshCanvas() {
            document.querySelectorAll('.disp, .dispbord').forEach(function(el){ el.style.display = 'none'; });
            document.querySelectorAll('.c, .b').forEach(function(el){
               el.style.display = 'none';
               el.style.borderColor = 'white';
            });
            document.querySelectorAll('.col-12').forEach(function(el){
               el.style.backgroundColor = 'rgba(0,0,0,0)';
               el.style.borderWidth = '1px';
            });
            document.querySelectorAll('.appear').forEach(function(el){ el.style.display = 'block'; });
            document.querySelectorAll('.appearlft').forEach(function(el){ el.style.display = 'none'; });
            var rightArea = document.querySelector('.rightArea');
            if (rightArea) { rightArea.style.borderWidth = '0px'; rightArea.style.overflow = 'visible'; }
            var emptyState = document.getElementById('canvasEmpty');
            if (emptyState) emptyState.style.display = 'flex';
            showToast('{{ __("lang.canvas_cleared") }}');
         }

         
         document.getElementById('btnExport').addEventListener('click', function(e){
            e.stopPropagation();
            var m = document.getElementById('exportMenu');
            m.style.display = (m.style.display === 'none') ? 'block' : 'none';
         });
         document.addEventListener('click', function(){
            document.getElementById('exportMenu').style.display = 'none';
         });

         
         function exportAs(format) {
            document.getElementById('exportMenu').style.display = 'none';
            var target = document.querySelector('.rightArea');
            if (!target) { showToast('{{ __("lang.nothing_to_export") }}'); return; }
            showToast('{{ __("lang.generating") }}');
            html2canvas(target, { useCORS: true, scale: 2, backgroundColor: '#ffffff' }).then(function(canvas) {
               if (format === 'png') {
                  var link = document.createElement('a');
                  link.download = 'mosaico-design.png';
                  link.href = canvas.toDataURL('image/png');
                  link.click();
                  showToast('{{ __("lang.png_downloaded") }}');
               } else {
                  var imgData = canvas.toDataURL('image/png');
                  var pdf = new window.jspdf.jsPDF({
                     orientation: canvas.width > canvas.height ? 'landscape' : 'portrait',
                     unit: 'px',
                     format: [canvas.width / 2, canvas.height / 2]
                  });
                  pdf.addImage(imgData, 'PNG', 0, 0, canvas.width / 2, canvas.height / 2);
                  pdf.save('mosaico-design.pdf');
                  showToast('{{ __("lang.pdf_downloaded") }}');
               }
            }).catch(function(){ showToast('{{ __("lang.export_error") }}'); });
         }

         
         function saveDesignToDb() {
            var centerId = null, borderId = null;
            var c1 = document.querySelector('.center1.c');
            if (c1 && c1.style.display !== 'none') centerId = c1.id;
            var b1 = document.querySelector('.border1.b');
            if (b1 && b1.style.display !== 'none') borderId = b1.id;

            if (!centerId && !borderId) {
               showToast('{{ __("lang.nothing_to_save") }}');
               return;
            }

            var centerColors = {};
            ['center1','center2','center3','center4','center5','center6'].forEach(function(cls, idx) {
               var el = document.querySelector('.' + cls + '.c');
               if (el && el.src) {
                  var m = el.src.match(/_(letter[a-f0-9]+)\.png$/i);
                  centerColors[String(idx+1)] = m ? m[1] : null;
               }
            });
            var borderColors = {};
            ['border1','border2','border3','border4','border5','border6'].forEach(function(cls, idx) {
               var el = document.querySelector('.' + cls + '.b');
               if (el && el.src) {
                  var m = el.src.match(/_(letter[a-f0-9]+)\.png$/i);
                  borderColors[String(idx+1)] = m ? m[1] : null;
               }
            });

            var bgColor = null;
            var col12 = document.querySelector('.col-12');
            if (col12) bgColor = col12.style.backgroundColor || null;

            var snapshot = {
               version: 1,
               center: { id: centerId, colors: centerColors },
               border: { id: borderId, colors: borderColors },
               background: { color: bgColor }
            };

            window._pendingSnapshot = snapshot;
            var container = document.getElementById('containerSquare');
            if (container && container.offsetParent !== null) {
               html2canvas(container, { scale: 0.5, useCORS: false, logging: false, backgroundColor: null })
                  .then(function(canvas) {
                     var thumb = document.createElement('canvas');
                     var maxW = 320, maxH = 240;
                     var ratio = Math.min(maxW / canvas.width, maxH / canvas.height, 1);
                     thumb.width  = Math.round(canvas.width  * ratio);
                     thumb.height = Math.round(canvas.height * ratio);
                     var ctx = thumb.getContext('2d');
                     ctx.drawImage(canvas, 0, 0, thumb.width, thumb.height);
                     window._pendingSnapshot.thumbnail = thumb.toDataURL('image/jpeg', 0.72);
                     openSaveModal();
                  })
                  .catch(function() { openSaveModal(); });
            } else {
               openSaveModal();
            }
         }

         function openSaveModal() {
            var defaultName = '{{ __("lang.my_designs_title") }} ' + new Date().toLocaleDateString();
            var input = document.getElementById('saveDesignName');
            input.value = defaultName;
            var overlay = document.getElementById('saveDesignOverlay');
            overlay.style.display = 'flex';
            setTimeout(function(){ input.select(); input.focus(); }, 60);
         }

         function closeSaveModal() {
            document.getElementById('saveDesignOverlay').style.display = 'none';
            window._pendingSnapshot = null;
         }

         function confirmSaveDesign() {
            var name = document.getElementById('saveDesignName').value.trim();
            if (!name) name = '{{ __("lang.my_designs_title") }}';
            var snapshot = window._pendingSnapshot;
            if (!snapshot) return;
            closeSaveModal();

            fetch('{{ route("designs.store") }}', {
               method: 'POST',
               credentials: 'same-origin',
               headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
               body: JSON.stringify({ name: name, snapshot: snapshot })
            })
            .then(function(r){
               if (!r.ok) { showToast('{{ __("lang.save_error") }}'); return null; }
               return r.json();
            })
            .then(function(data){
               if (!data) return;
               if (data.id) { window._currentDesignId = data.id; }
               showToast('{{ __("lang.design_saved") }} ✓');
            })
            .catch(function(){ showToast('{{ __("lang.save_error") }}'); });
         }
         document.getElementById('saveDesignOverlay').addEventListener('click', function(e) {
            if (e.target === this) closeSaveModal();
         });
         document.getElementById('saveDesignName').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') confirmSaveDesign();
            if (e.key === 'Escape') closeSaveModal();
         });

         
         var _currentDesignId = {{ $loadDesignId ?? 'null' }};

         function goToOrder() {
            var id = window._currentDesignId || _currentDesignId;
            var url = '{{ route("orders.create") }}';
            if (id) url += '?design_id=' + id;
            window.location.href = url;
         }

         
         function showHelp() {
            showToast('{{ __("lang.help_text") }}', 6000);
         }

         
         @if(!empty($loadDesign))
         window.addEventListener('load', function() {
            var snap = @json($loadDesign);
            setTimeout(function() { restoreDesign(snap); }, 400);
         });
         @endif

         function restoreDesign(snap) {
            if (!snap) return;
            if (snap.center && snap.center.id) {
               var centerEl = document.getElementById(snap.center.id);
               if (centerEl) {
                  getIdCenter(centerEl);
               }
            }
            if (snap.border && snap.border.id) {
               setTimeout(function() {
                  var borderEl = document.getElementById(snap.border.id);
                  if (borderEl) {
                     getIdBorder(borderEl);
                  }
               }, 100);
            }
            if (snap.background && snap.background.color) {
               setTimeout(function() {
                  var elements = document.getElementsByClassName('col-12');
                  for (var i = 0; i < elements.length; i++) {
                     elements[i].style.backgroundColor = snap.background.color;
                  }
                  var sqBtn = document.getElementById('squareColor');
                  if (sqBtn) sqBtn.style.backgroundColor = snap.background.color;
                  var appear = document.getElementsByClassName('appear');
                  for (var i = 0; i < appear.length; i++) appear[i].style.display = 'none';
               }, 200);
            }

            showToast('{{ __("lang.design_saved") }} ✓');
         }
      </script>

     <script>

         window.onload = function(){

         var timerForLoadingResult = setInterval(ajaxCall, 1000);

         function ajaxCall() {
            $.get("images/center/117.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/center/117.png";
               var src = document.getElementById("117");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })

            $.get("images/center/225.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/center/225.png";
               var src = document.getElementById("225");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })

            $.get("images/center/119.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/center/119.png";
               var src = document.getElementById("119");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })

            $.get("images/center/127.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/center/127.png";
               var src = document.getElementById("127");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })

            $.get("images/center/128.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/center/128.png";
               var src = document.getElementById("128");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })
            $.get("images/border/401.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/border/401.png";
               var src = document.getElementById("401");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })

            $.get("images/border/424.png")
               .done(function(){

               var img = document.createElement("img");

               img.src = "images/border/424.png";
               var src = document.getElementById("424");
               img.style.height="50px";

               src.appendChild(img);

               console.log('file is ready !');
               clearInterval(timerForLoadingResult)

            }).fail(function() {

               console.log('oups ! file not found ...');

            })
         }

         }

      </script>

   <script>
   

   (function() {

      
      var _origGetIdCenter = getIdCenter;
      getIdCenter = function(imgid) {
         _origGetIdCenter(imgid);
         var cs = document.getElementById('containerSquare');
         if (cs) {
            cs.classList.remove('canvas-entering');
            void cs.offsetWidth;            
            cs.classList.add('canvas-entering');
         }
         
         var empty = document.getElementById('canvasEmpty');
         if (empty && empty.style.display !== 'none') {
            empty.classList.add('ms-hiding');
            setTimeout(function() { empty.style.display = 'none'; }, 300);
         }
      };

      
      var _origGetIdBorder = getIdBorder;
      getIdBorder = function(imgid) {
         _origGetIdBorder(imgid);
         var cs = document.getElementById('containerSquare');
         if (cs) {
            cs.classList.remove('canvas-entering');
            void cs.offsetWidth;
            cs.classList.add('canvas-entering');
         }
      };

      
      function watchSidebarThumbs() {
         var thumbs = document.querySelectorAll('.sidebar-tiles .c, .sidebar-tiles .b');
         if (!thumbs.length) return;
         var obs = new MutationObserver(function(mutations) {
            mutations.forEach(function(m) {
               if (m.type === 'attributes' && m.attributeName === 'style') {
                  var el = m.target;
                  if (el.style.display === 'block' || el.style.display === '') {
                     el.classList.remove('thumb-pop');
                     void el.offsetWidth;
                     el.classList.add('thumb-pop');
                  }
               }
            });
         });
         thumbs.forEach(function(el) {
            obs.observe(el, { attributes: true, attributeFilter: ['style'] });
         });
      }

      
      var _origToggle = toggle_visibility;
      toggle_visibility = function(id) {
         _origToggle(id);
         var el = document.getElementById(id);
         if (el && el.style.display === 'block') {
            el.classList.remove('ms-modal-appear');
            void el.offsetWidth;
            el.classList.add('ms-modal-appear');
         }
      };

      
      ['letter7ca6ca', 'letterb9595a', 'letterfaeab0', 'squareColor'].forEach(function(id) {
         var el = document.getElementById(id);
         if (!el) return;
         el.addEventListener('click', function() {
            el.classList.remove('swatch-clicked');
            void el.offsetWidth;
            el.classList.add('swatch-clicked');
         });
      });

      
      function watchTileSelection() {
         var tiles = document.querySelectorAll('.sidebar-tiles img.c, .sidebar-tiles img.b');
         var obs = new MutationObserver(function(mutations) {
            mutations.forEach(function(m) {
               if (m.type === 'attributes' && m.attributeName === 'style') {
                  var el = m.target;
                  var slot = el.parentElement;
                  if (!slot) return;
                  if (el.style.borderColor === 'red') {
                     slot.classList.add('slot-selected');
                  } else {
                     slot.classList.remove('slot-selected');
                  }
               }
            });
         });
         tiles.forEach(function(el) {
            obs.observe(el, { attributes: true, attributeFilter: ['style'] });
         });
      }

      
      document.addEventListener('DOMContentLoaded', function() {
         watchSidebarThumbs();
         watchTileSelection();
      });
      
      if (document.readyState !== 'loading') {
         watchSidebarThumbs();
         watchTileSelection();
      }

   })();
   </script>

   </body>
</html>