                    
                     <div class="single__share">
                      <?php
                        $currentlang = get_bloginfo('language');
                        if($currentlang=="en-US"){
                          echo 'Share the link';
                        }
                        else {
                          echo 'Поделиться ссылкой';
                        }
                       ?>
                        <!------ Rambler.Likes script start ------>
                        <div class="rambler-share"></div>
                        <script>
                        (function() {
                        var init = function() {
                        RamblerShare.init('.rambler-share', {
                                "style": {
                                        "buttonHeight": 26
                                },
                                "utm": "utm_medium=social",
                                "counters": true,
                                "buttons": [
                                        "vkontakte",
                                        "facebook",
                                        "odnoklassniki",
                                        "twitter"
                                ]
                        });
                        };
                        var script = document.createElement('script');
                        script.onload = init;
                        script.async = true;
                        script.src = 'https://developers.rambler.ru/likes/v1/widget.js';
                        document.head.appendChild(script);
                        })();
                        </script>
                        <!------   Rambler.Likes script end  ------>
                    </div>