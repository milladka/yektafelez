<section class="product rtl">
    <div class="tab-product container">
        <ul class="nav nav-tabs">
            <li><button onclick="openpro(event, 'varagh')"  class="tablinkss active show"><img src="<?php echo URLROOT;?>/img/anvae-varagh.png" alt="varagh">ورق</button></li>
            <li><button onclick="openpro(event, 'tirahan')" class="tablinkss"><img src="<?php echo URLROOT;?>/img/tirahan-1.png" alt="milgerd">تیرآهن</button></li>
            <li><button onclick="openpro(event, 'milgerd')" class="tablinkss"><img src="<?php echo URLROOT;?>/img/milgerd.png" alt="varagh">میلگرد</button></li>
            <li><button onclick="openpro(event, 'profil')"  class="tablinkss"><img src="<?php echo URLROOT;?>/img/profil.png" alt="varagh">لوله و پروفیل</button></li>
            <li><button onclick="openpro(event, 'nabshi')"  class="tablinkss"><img src="<?php echo URLROOT;?>/img/nabshi.png" alt="varagh">نبشی و ناودانی</button></li>
            <li><button onclick="openpro(event, 'saier')"   class="tablinkss"><img src="<?php echo URLROOT;?>/img/khadamat-va-tajhizat.png" alt="varagh">سایر اقلام</button></li>
        </ul>

        <div class="tab-content" style="direction: ltr;">
            <div id="varagh" class="tab-pane active">
                <div class="varagh-view your-class owl-theme ">
                  <!-- inner foreach -->
                </div>
                <button type="button" class="btn btn-warning btn-sm">کلیه محصولات گروه ورق</button>
            </div>
            <div id="tirahan" class="tab-pane">
              <!-- inner foreach -->
            </div>
            <div id="milgerd" class="tab-pane">
              <!-- inner foreach -->
            </div>
            <div id="profil" class="tab-pane">
              <!-- inner foreach -->
            </div>
            <div id="nabshi" class="tab-pane">
              <!-- inner foreach -->
            </div>
            <div id="saier" class="tab-pane">
            <!-- inner foreach -->
            </div>
        </div>
    </div>
</section>
