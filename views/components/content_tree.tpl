<div class="card">
    <div class="card-body content-tree">
        <h5 class="card-title">My Topic Tree
            <a class="btn btn-primary" data-toggle="collapse" href="#contentTree" role="button" aria-expanded="false" aria-controls="collapseExample">
                Hide
            </a>
        </h5>
        <div id="contentTree" class="collapse show">
        <p class="card-text ">A hierarchical view of your Topics</p>

        <ul class="list-group">
            {foreach $allTopics as $topic}
                <li data-parent-id="{$topic.parent_id}" data-level="{$topic.level}"  style="margin-left: {$topic.level}vw" class="list-group-item parent-id-{$topic.parent_id}" id="tree-{$topic.id}"><a
                            href="./index.php?p=content&id={$topic.id}">{$topic.title}</a>
                    {if $topic.has_child == 'Y'}
                        <a href="#" style="float: right"><i class="fas fa-minus" ></i></a>
                        </li>
                    {/if}

            {/foreach}
        </ul>
        </div>
    </div>
</div>

