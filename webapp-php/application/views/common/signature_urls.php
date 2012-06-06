<div id="sigurls" class="ui-tabs-hide">
    <?php if(count($urls) > 0) { ?>
    <table id="sigurls-tbl" class="tablesorter data-table">
        <thead>
            <tr>
                <th>Total Count</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($urls as $url) { ?>
            <tr>
                <td><?php out::H($url->crash_count); ?></td>
                <td>
                    <?php $display_url = substr($url->url, 0, 80); ?>
                    <a href="<?php out::H($url->url); ?>" title="<?php out::H($url->url); ?>"><?php out::H($display_url); ?></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <p>No URLs found for signature <?php if (isset($display_signature)) { out::H($display_signature); } ?></p>
    <?php } ?>
</div>