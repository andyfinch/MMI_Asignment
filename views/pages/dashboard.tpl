{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                {include file="../components/content_tree.tpl"}
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Topic List</h5>
                        <p class="card-text">A list view of your topics</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Contents Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $allTopics as $topic}
                                <tr>
                                    <td><a href="./index.php?p=content&id={$topic.id}"> {$topic.title}</a></td>
                                    <td>{$topic.description}</td>
                                    <td>{$topic.created|date_format:"%d/%m/%Y %H:%M"}</td>
                                    <td>{$topic.contentCount}</td>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
{block name="modals"}
    {include file="../components/content_modal.tpl"}
{/block}
{block name="scripts"}
    <script>
        postAjax.init();
        contentTree.init();
    </script>
    {if $message}
        <script>

            $(function () {
                var message = '{$message}';
                $('.toast .toast-body').text(message);
                $('.toast').toast('show');

            });
        </script>
    {/if}

{/block}
