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
                {foreach $contentTopics as $topic}
                    <div style="padding-left: {$topic.level - $root_topic_level}%">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h5 class="card-title title">{$topic.title}</h5>
                                        {if $topic.description != null}
                                            <h6 class="card-title description">{$topic.description}</h6>
                                        {/if}
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Add Content" data-toggle="modal"
                                                       data-header="Add content to topic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-controller="content"
                                                       data-topic_id="{$topic.id}"
                                                       class="fas fa-file"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Add Sub Topic" data-toggle="modal"
                                                       data-controller="topic"
                                                       data-header="Create new subtopic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-level="{$topic.level+1}" data-parent_id="{$topic.id}"
                                                       class="fas fa-folder-plus"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Edit Topic" data-toggle="modal" data-target="#topicModal"
                                                       data-controller="topic"
                                                       data-header="Edit Topic"
                                                       data-action="edit" data-id="{$topic.id}"
                                                       data-level="{$topic.level}" data-parent_id="{$topic.parent_id}"
                                                       class="fas fa-edit"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Delete Topic" data-toggle="modal"
                                                       data-target="#deleteModal"
                                                       data-header="Delete Topic"
                                                       data-id="{$topic.id}"
                                                       data-parent_id="{$topic.pa}"
                                                       data-controller="topic"
                                                       class="fas fa-trash-alt"></i>
                                                </a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            {foreach $topic.contents as $contents}
                                {if $contents.content != null || $contents.images != null || $contents.videos != null}
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col card-text content"
                                                 style="font-family: inherit">{$contents.content}
                                            </div>

                                            <div class="col-auto ml-auto">
                                                <ul class="list-group list-group-horizontal">

                                                    <li class="list-group-item"><a class="text-secondary" href="#">
                                                            <i title="Edit Content" data-toggle="modal"
                                                               data-target="#topicModal" data-controller="content"
                                                               data-header="Edit Content"
                                                               data-action="edit"
                                                               data-topic_id="{$topic.id}"
                                                               data-id="{$contents.id}"
                                                               class="fas fa-edit"></i>
                                                        </a></li>
                                                    <li class="list-group-item"><a class="text-secondary" href="#">
                                                            <i title="Delete Content" data-toggle="modal"
                                                               data-target="#deleteModal"
                                                               data-header="Delete Content"
                                                               data-controller="content"
                                                               data-topic_id="{$topic.id}"
                                                               data-id="{$contents.id}"
                                                               data-action="delete"
                                                               class="fas fa-trash-alt"></i>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="owl-carousel image-carousel">
                                                    {foreach $contents.images as $image}
                                                        <img width="250" height="250" src="{$image.url}"
                                                             alt="{$image.url}"/>
                                                    {/foreach}
                                                </div>
                                            </div>
                                        </div>


                                        {foreach $contents.videos as $video}
                                            <div class="row mt-5">
                                                <div class="col">
                                                    <iframe width="560" height="315"
                                                            src="{$video.url}"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    
                                                </div>
                                            </div>
                                        {/foreach}

                                    </div>
                                    <hr>
                                {/if}

                            {/foreach}


                        </div>
                    </div>
                {/foreach}

            </div>
        </div>
    </div>
    <form id="deleteFormModal" class="needs-validation" novalidate="" method="post" action="index.php">


        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <input type="hidden" id="controller" name="controller" value="topic">
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="topic_id" name="topic_id">
                    <input type="hidden" id="parent_id" name="parent_id">

                    <div class="modal-body">
                        <input id="function" type="hidden" name="function" value="delete">
                        <div class="container">
                            <div class="text-center">
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

        function enableCarousel() {
            $('.for-owl-carousel').addClass('owl-carousel');

            $('.owl-carousel').owlCarousel({
                stagePadding: 30,
                loop: false,
                margin: 10,
                responsiveClass: true,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    }
                }
            });
        }

        $(function () {

            $('.owl-carousel.image-carousel').owlCarousel({
                items: 1,
                merge: false,
                loop: false,
                margin: 10,
                video: false,
                lazyLoad: true,
                center: false,
                responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 4
                    }
                }
            });

            $('.owl-carousel.video-carousel').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                video: true,
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
                if ($(this).text().indexOf('Enable') > -1) {
                    $(this).text('Disable Carousel View');
                    $('.for-owl-carousel').addClass('owl-carousel');

                    $('.owl-carousel').owlCarousel({
                        stagePadding: 0,
                        autoWidth: false,
                        loop: false,
                        margin: 0,
                        responsiveClass: true,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: true
                            }
                        }
                    });
                } else {
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
            $(modal).find('#controller').val(button.data('controller'));
            $(modal).find('#id').val(button.data('id'));
            $(modal).find('#topic_id').val(button.data('topic_id'));
            $(modal).find('.header').text(button.data('header'));

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
