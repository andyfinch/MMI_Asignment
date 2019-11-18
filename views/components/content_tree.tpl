<div class="card">
    <div class="card-body content-tree">
        <h5 class="card-title">My Content Tree</h5>
        <p class="card-text ">A hierarchical view of your content</p>
        <ul class="list-group">
            {foreach $allTopics as $topic}
                <li data-parent-id="{$topic.parent_id}"  style="margin-left: {$topic.level}vw" class="list-group-item parent-id-{$topic.parent_id}" id="tree-{$topic.id}"><a
                            href="./index.php?p=content&id={$topic.id}">{$topic.title}</a><span class="tree-x" style="display: inline-block; width: 90%">click</span></li>
            {/foreach}
        </ul>
    </div>
</div>
