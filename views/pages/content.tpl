{extends file="layouts/main.tpl"}
{block name="leftlinks"}
<li class="nav-item">
    <a href="#" id="carouselLink" class="nav-link">
        Enable Carousel View
    </a>
</li>
{/block}

{block name="body"}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-lg-3">
                {include file="../components/content_tree.tpl"}
            </div>


            <div class="col-sm-8 col-lg-9 ">

                {$root_topic_level = $contentTopics[0].level}
                {$index = 0}

                {foreach $contentTopics as $topic}

                    <div style="padding-left: {$topic.level - $root_topic_level}%">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h5 class="card-title">{$topic.title}</h5>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Add Content" data-toggle="modal" data-header="Create new subtopic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-level="{$topic.level+1}" data-parent_id="{$topic.id}"
                                                       class="fas fa-file"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Add Sub Topic" data-toggle="modal" data-header="Create new subtopic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-level="{$topic.level+1}" data-parent_id="{$topic.id}"
                                                       class="fas fa-folder-plus"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Edit Topic" data-toggle="modal" data-target="#topicModal"
                                                       data-header="Edit Topic"
                                                       data-action="edit" data-id="{$topic.id}"
                                                       data-level="{$topic.level}" data-parent_id="{$topic.parent_id}"
                                                       class="fas fa-edit"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Delete Topic" data-toggle="modal" data-target="#deleteModal"
                                                       data-header="Delete Topic"
                                                       data-action="delete" data-id="{$topic.id}"
                                                       data-parent_id="{$topic.pa}"
                                                       class="fas fa-trash-alt"></i>
                                                </a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto ml-auto">
                                        <ul class="list-group list-group-horizontal">
                                            
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Edit Content" data-toggle="modal" data-target="#topicModal"
                                                       data-header="Edit Topic"
                                                       data-action="edit" data-id="{$topic.id}"
                                                       data-level="{$topic.level}" data-parent_id="{$topic.parent_id}"
                                                       class="fas fa-edit"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Delete Content" data-toggle="modal"
                                                       data-target="#deleteModal"
                                                       data-header="Delete Topic"
                                                       data-action="delete" data-id="{$topic.id}"
                                                       data-parent_id="{$topic.pa}"
                                                       class="fas fa-trash-alt"></i>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            {if $topic.description != null || $topic.content != null}
                                <div class="card-body">
                                    {if $topic.description != null}
                                        <h6 class="card-title">{$topic.description}</h6>
                                    {/if}
                                    {if $topic.content != null}
                                        <div class="card-text content"
                                             style="font-family: inherit">{$topic.content}</div>
                                    {/if}


                                </div>
                            {/if}
                            {if $topic.type == '2'}

                                <div class="card-body">

                                    <div class="owl-carousel">
                                    {foreach $mediaURLS[$topic.content_id] as $url}
                                        <img width="250" height="250" src="{$url}" alt="{$url}"/>
                                    {/foreach}
                                    </div>

                                </div>
                            {/if}
                            </div>
                        </div>
                    </div>


                {$index = $index +1}
                {/foreach}

            </div>
        </div>
    </div>

<form id="deleteFormModal" class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="topic">

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <input type="hidden" id="id" name="id">
                <input type="hidden" id="parent_id" name="parent_id">
                <div class="modal-body">
                    <input id="function" type="hidden" name="function" value="delete">
                    <div class="container">
                        <div class="text-center">
                            <h2>Topic</h2>
                            <p class="lead header">Delete topic</p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submit" type="submit" class="btn btn-primary">Delete
                        <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
{/block}
{block name="modals"}
    {include file="../components/content_modal.tpl"}
{/block}
{block name="scripts"}
    <script>
        postAjax.init();
        contentTree.init();
        function enableCarousel()
        {
            $('.for-owl-carousel').addClass('owl-carousel');

            $('.owl-carousel').owlCarousel({
                stagePadding: 30,
                loop: false,
                margin: 10,
                responsiveClass: true,
                nav:true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    }
                }
            });
        }

        $(function () {

            $('.owl-carousel').owlCarousel({
                items: 1,
                merge: false,
                loop: true,
                margin: 10,
                video: false,
                lazyLoad: true,
                center: true,
                responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 4
                    }
                }
            });

            $('#carouselLink').on('click', function (event) {
                console.log('ff');
                if ($(this).text().indexOf('Enable') > -1)
                {
                    $(this).text('Disable Carousel View');
                    $('.for-owl-carousel').addClass('owl-carousel');

                    $('.owl-carousel').owlCarousel({
                        stagePadding: 0,
                        autoWidth: false,
                        loop: false,
                        margin: 0,
                        responsiveClass: true,
                        nav:true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: true
                            }
                        }
                    });
                }
                else
                {
                    $(this).text('Enable Carousel View');
                    var owl = $('.owl-carousel');
                    owl.owlCarousel();
                    owl.trigger('destroy.owl.carousel');
                    $('.for-owl-carousel').removeClass('owl-carousel');
                }


            });

            var modal = $('#contentModal');
            $(modal).find('#level').val('{$topic.level + 1}');
            $(modal).find('#parent_id').val('{$topic.id}');
            $('#tree-' + '{$contentTopics[0].id}').addClass('tree-active');

        });

        $('#deleteModal').on('show.bs.modal', function (event) {

            var modal = $(this).find('.modal-content');
            var button = $(event.relatedTarget);
            $(modal).find('#id').val(button.data('id'));

        })

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
