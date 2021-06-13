<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>&copy <span id="year"></span> All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <script>
                            let year = new Date();
                            document.querySelector("#year").innerHTML = year.getFullYear();

                        </script>