<div class="row">
  <div class="large-12 columns">
    <h1>All Announcements</h1>
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <table>
      <thead>
        <tr>
          <th width='175'><?php echo $this->Paginator->sort('title', 'Title'); ?></th>
          <th width='100'><?php echo $this->Paginator->sort('created', 'Date Posted'); ?></th>
          <th>Content</th>
        </tr>
      </thead>
      <tbody>

        <?php

          foreach ($data as $ann) {
            $ann = $ann['Announcement'];
            echo "<tr><td>".$this->Html->link($ann['title'], 'view/'.$ann['slug'])."</td><td>".$ann['created']."</td>"
                  . "<td>". (strlen($ann['body']) > 150 ? substr($ann['body'],0,150) : $ann['body']) . "...</td></tr>";
          }

        ?>

      </tbody>
      <?php
        $numbers = $this->Paginator->numbers();
        if ($numbers):
      ?>
      <tfoot>
        <tr>
          <td colspan="3">
            <div class="text-center">
              <?php echo $numbers; ?>
            </div>
          </td>
        </tr>
      </tfoot>
      <?php
        endif;
      ?>
    </table>
  </div>
</div>