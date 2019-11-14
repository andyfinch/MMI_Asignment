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
            {*<div class="col-9">
            <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">test</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">test</h6>
                        <p class="card-text">test</p>
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#topicModal">
                            Add Sub-Content
                        </button>
                    </div>
                </div>
            </div>*}

            <div class="col-9">
                {foreach $topics as $topic}
                <div class="card mb-1 topic-level-{$topic.level}">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">{$topic.title}</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a class="text-secondary" href="#">
                                    <i data-toggle="modal" data-target="#topicModal" data-action="edit" data-id="{$topic.id}" data-title="{$topic.title}" data-description="{$topic.description}" data-content="{$topic.content}" data-level="{$topic.level}" data-parent_id="{$topic.parent_id}" class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                        <!--<h5 class="card-title">{$topic.title}</h5>
                        <div class="col-md-6 text-right">
                            <a class="text-secondary" onclick="editForm();" href="#"><i class="fas fa-edit"></i></a>
                        </div>-->
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{$topic.description}</h6>
                        <p class="card-text"><pre style="font-family: inherit">{$topic.content}</pre></p>
                        <button class="btn btn-primary" onclick="setIds('{$topic.level+1}', '{$topic.id}')" type="submit" data-toggle="modal" data-target="#topicModal">
                            Add Sub-Content
                        </button>
                    </div>
                </div>
                {/foreach}

            </div>
        </div>
    </div>
{/block}

{block name="scripts"}
    <script>
        postAjax.init();

        function setIds(level, parent)
        {
            var modal = $('#contentModal');
            $(modal).find('#level').val(level);
            $(modal).find('#parent_id').val(parent);
        }

        /*function populateModal(title, description, content, level, parent)
        {
            var modal = $('#contentModal');
            $(modal).find('#title').val(title);
            $(modal).find('#description').val(description);
            $(modal).find('#content').val(content);
            $(modal).find('#level').val(level);
            $(modal).find('#parent_id').val(parent);
        }*/

        $(function () {
            var modal = $('#contentModal');
            $(modal).find('#level').val('{$topic.level + 1}');
            $(modal).find('#parent_id').val('{$topic.id}');
            $('#tree-' + '{$topics[0].id}').addClass('tree-active');

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
