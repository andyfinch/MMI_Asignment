{extends file="layouts/main.tpl"}
{block name="body"}
<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">My Content</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                {getTopics}



                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
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
    </div>
</div>
{/block}
{block name="modals"}
<div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="container">
                    <div class="text-center">
                        <h2>Topic</h2>
                        <p class="lead">Create a new topic</p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <form class="needs-validation" novalidate="">

                                <div class="mb-3">
                                    <label for="title">Title </label>
                                    <input type="text" class="form-control" id="title">
                                    <div class="invalid-feedback">
                                        Please enter a valid title.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description">Description </label>
                                    <input type="text" class="form-control" id="description">
                                    <div class="invalid-feedback">
                                        Please enter a valid title.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="category">Categorise </label>
                                    <input type="text" class="form-control" id="category">
                                    <!--todo change to dropdown-->
                                    <div class="invalid-feedback">
                                        Please enter a valid category.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="content">Content </label>
                                    <textarea rows="15" type="text" class="form-control" id="content"></textarea>
                                    <div class="invalid-feedback">
                                        Please enter valid content.
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Create</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
{/block}

