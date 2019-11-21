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
                        <h5 class="card-title">My Content List</h5>
                        <p class="card-text">A list view of your content</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $allTopics as $topic}
                                <tr>
                                    <td><a href="./index.php?p=content&id={$topic.id}"> {$topic.title}</a></td>
                                    <td>{$topic.description}</td>
                                    <td>{$topic.created}</td>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>

                        {*<a href="#" class="btn btn-primary">Go somewhere</a>*}
                    </div>
                </div>
            </div>
            {*<div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent activity</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            <tr>
                                <td>Insertion Sort</td>
                                <td>01/01/2019 @ 19:00</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Go somewhereX</a>
                    </div>
                </div>
            </div>*}
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
                //$('.toast .toast-header .content').text(message);
                $('.toast .toast-body').text(message);
                $('.toast').toast('show');

            });
        </script>
    {/if}

{/block}
