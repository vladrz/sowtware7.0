<div id="leftColumn">
  <div id="leftMenu">
      <div class="menuCaption">
        Menu
      </div>
      {foreach $rsList as $item}
        <a href="#">{$item['name']}</a><br />
          {if isset ({$item['team']})}
          {foreach $item['team'] as $itemT}
            --<a href="#">{$itemT['name']}</a><br />
            {/foreach}
          {/if}
        {/foreach}
  </div>
</div>
