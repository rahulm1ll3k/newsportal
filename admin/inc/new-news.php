<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Insert New Post</h2>
                <p class="pageheader-text">Insert new post and publish it.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">News</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New News</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <form>
                <div class="section-block" id="basicform">
                    <h3 class="section-title">News Title</h3>
                    <input id="inputText3" type="text" class="form-control">
                    <p>This title will be used as a heading of the news.</p>
                </div>
                <div class="card">
                    <h5 class="card-header">News Content</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputPassword">Status</label>
                                    <select class="form-control" id="input-select">
                                        <option value="1">Publish</option>
                                        <option value="0">Draft</option>
                                        <option value="2">Pending for review</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">News Category</label>
                                    <select class="form-control" id="input-select">
                                        <option value="1">Entertainment</option>
                                        <option value="2">Technology</option>
                                        <option value="3">Education</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Publisher is</label>
                                    <input readonly="readonly" id="inputEmail" type="text" placeholder="Rahul Mallik" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Publish Date</label>
                                    <input type="date" class="form-control" id="date" onload="getDate()">
                                </div>
                                <div class="form-group">
                                    <label for="inputText4" class="col-form-label">Published By</label>
                                    <input id="inputText4" type="text" class="form-control" placeholder="Publisher Name" value="Rahul Mallik">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
