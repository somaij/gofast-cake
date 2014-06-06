<div class="row">
  <h1>Job Postings</h1>

    <table>
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('title', 'Title'); ?></th>
          <th><?php echo $this->Paginator->sort('post_date', 'Post Date'); ?></th>
          <th><?php echo $this->Paginator->sort('close_date', 'Closing Date'); ?></th>
          <th>Description</th>
          <th colspan="3">Requirements</th>
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
                    "<td>" . substr($job['requirements'],0,150) . "...</td>" .
                    "<td>" .
                      $this->Html->link('Edit', array(
                            'plugin' => 'admin',
                            'controller' => 'jobs',
                            'action' => 'edit', $job['id']),
                        array('class' => 'button small secondary')) .
                    "</td>" .
                    "<td>" .
                      $this->Html->link('Delete', array(
                            'plugin' => 'admin',
                            'controller' => 'jobs',
                            'action' => 'delete', $job['id']),
                        array('class' => 'button small alert')) .
                    "</td>" .
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
          <td colspan="7" class="text-center">
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