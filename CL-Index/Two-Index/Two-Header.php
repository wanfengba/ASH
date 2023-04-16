 <!-- 全局 背景图-->
    <div id="web_bg" style="--image:url('<?php $this->options->Aweb_bg() ?>')"></div>
    <div class="Two-Index" id="body-wrap">
        <div Two-Index>
        <div class="title"><?php $this->options->Ahaed_Author() ?></div>
            <div class="flex">
                <div id="typed-strings">
                    <p class="introduce"><?php $this->options->Asubtitle() ?></p>
                </div>
                <span id="typed" style="white-space:pre;"></span>
            </div>
                <script>
                $(function(){
                    $("#typed").typed({
                        stringsElement: $('#typed-strings'),
                        typeSpeed: 30,
                        backDelay: 500,
                        loop: false,
                        contentType: 'html', 
                        loopCount: false,
                        callback: function(){ foo(); },
                        resetCallback: function() { newTyped(); }
                    });
                    $(".reset").click(function(){
                        $("#typed").typed('reset');
                    });
                });
                function foo(){ console.log("Callback"); }
                </script>
            <script src="<?php _getAssets('assets/js/ASH.typed.js'); ?>"></script>
        </div>
        <span class="scroll_down">
            <a href="#about" class="scroll-down-arrow smooth-scroll scroll-down-effects"><svg class="joe_dropdown__link-icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                <path d="M561.873 725.165c-11.262 11.262-26.545 21.72-41.025 18.502-14.479 2.413-28.154-8.849-39.415-18.502L133.129 375.252c-17.697-17.696-17.697-46.655 0-64.352s46.655-17.696 64.351 0l324.173 333.021 324.977-333.02c17.696-17.697 46.655-17.697 64.351 0s17.697 46.655 0 64.351L561.873 725.165z" p-id="3535" fill="#fff"></path>
              </svg></a>
        </span>
          <script>
            $('a.scroll-down-arrow[href^="#"]').click(function(e){
                e.preventDefault();
                $('html, body').animate({scrollTop: $(this.hash).offset().top}, 400);
            });
          </script>
    </div>