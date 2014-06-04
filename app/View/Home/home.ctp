    <div id="slideshow">
        <div class="row">
          <div class="large-12 columns">
            <h1>Welcome to <span style="color:#ee6123;">Go Fast Express</span>!</h1>
            <h4 class="subheader">Got a load? We got you covered. Request a quote today!</h4>
          </div>
        </div>
        <div class="row">
        <div class="large-12 columns">
        <div class="orbit-container show-for-medium-up">
          <ul data-orbit>
            <li>
              <img src="http://placehold.it/1000x400&text=[%20img%201%20]" alt="slide 1" />
              <div class="orbit-caption">
                Caption One.
              </div>
            </li>
            <li class="active">
              <img src="http://placehold.it/1000x400&text=[%20img%202%20]" alt="slide 2" />
              <div class="orbit-caption">
                Caption Two.
              </div>
            </li>
            <li>
              <img src="http://placehold.it/1000x400&text=[%20img%203%20]" alt="slide 3" />
              <div class="orbit-caption">
                Caption Three.
              </div>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </div>

    <div class="row">
      <h2 class="large-12 columns">What's new</h2>
    </div>

    <!-- Three-up Content Blocks -->
    <div class="row">
      <?php
      foreach ($data as $entry) {
        $ann = $entry['Announcement'];
        echo "<div class='medium-4 columns'><h4>" . $this->Html->link($ann['title'], '/announcements/view/'.$ann['slug']) . "</h4>"
          . "<p>" . (strlen($ann['body']) > 150 ? substr($ann['body'],0,150) : $ann['body']) . "...</p></div>";
      }
      ?> 
    </div>
  </div>
</div>