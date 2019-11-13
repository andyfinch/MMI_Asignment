{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body content-tree">
                        <h5 class="card-title">My Content</h5>
                        <p class="card-text ">With supporting text below as a natural lead-in to additional content.</p>
                        {buildTopicTree}
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{$topic.title}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{$topic.description}</h6>
                        <p class="card-text">{$topic.content}</p>
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#topicModal">
                            Add Sub-Content
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name="scripts"}
    <script>
        postAjax.init();

        $(function () {
            var modal = $('#contentModal');
            $(modal).find('#level').val('{$topic.level + 1}');
            $(modal).find('#parent_id').val('{$topic.id}');
            $('#tree-' + '{$topic.id}').addClass('tree-active');

        });

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
