
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="hidden-xs hidden-sm col-md-2 col-lg-2">
        <a class="kira-all small" href="http://kira-all.ru" target="_blank">
          <div class="logo">
            <img src="/sites/all/themes/zu/library/img/logo_kira_all.png">
          </div>
          <p>Проект разработан <br />«Рекламным агентством <br />Киры Аллейновой»</p>
        </a>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="row">
          <div class="founders">
            <div class="header">При поддержке</div>
            <ul class="list-unstyled small">
              <li>Комитета по образованию правительства Санкт-Петербурга</li>
              <li>Комитета по социальной политике правительства Санкт-Петербурга</li>
              <li>Комитета по молоденой политике и взаимодействию с общественными организациями правительства Санкт-Петербурга</li>
              <li>УГИБДД ГУ МВД России по г.Санкт-Петербургу и Ленинградской области</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <?php if($page['footer']):?>
            <?php print render($page['footer']); ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
        <a class="cds-logo" href="/" title="">
          <img class="img-responsive" src="/sites/all/themes/zu/library/img/cds_logo.png" alt="">
        </a>
      </div> 
      <div class="col-xs-12 col-sm-6 hidden-md hidden-lg">
        <a class="kira-all small mobile" href="http://kira-all.ru" target="_blank">
          <p>Проект разработан <br />«Рекламным агентством <br />Киры Аллейновой»</p>
          <div class="logo">
            <img src="/sites/all/themes/zu/library/img/logo_kira_all.png">
          </div>
        </a>
      </div>   
    </div>
  </div>
</footer>