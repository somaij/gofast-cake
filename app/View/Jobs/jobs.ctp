<div class="row">
  <div class="small-12 columns">
    <div class="row">
      <div class="large-5 columns">
        <h1>Looking for work?</h1>
      </div>
      <div class="large-7 columns">
        <h1><small>Take a look at our open positions!</small></h1>
      </div>
    </div>

    <table>
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('title', 'Title'); ?></th>
          <th><?php echo $this->Paginator->sort('post_date', 'Post Date'); ?></th>
          <th><?php echo $this->Paginator->sort('close_date', 'Closing Date'); ?></th>
          <th>Description</th>
          <th>Requirements</th>
        </tr>
      </thead>
      <tbody>
        <?php

          foreach ($data as $job) {
            $job = $job['Job'];

            echo  "<tr>" .
                    "<td>" . $this->Html->link($job['title'], 'view/'.$job['id']) . "</td>" .
                    "<td>" . $job['post_date'] . "</td>" .
                    "<td>" . $job['close_date'] . "</td>" .
                    "<td>" . substr($job['description'],0,150) . "...</td>" .
                    "<td>" . substr($job['requirements'],0,150). "...</td>" .
                  "</tr>";
          }

        ?>
      </tbody>
      <?php
        $numbers = $this->Paginator->numbers();
        if ($numbers):
      ?>
      <tfoot>
        <tr>
          <td colspan="5" class="text-center">
            <?php echo $numbers; ?>
          </td>
        </tr>
      </tfoot>
      <?php
        endif;
      ?>
    </table>
  </div>
</div>