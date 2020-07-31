<div class="modal fade bs-example-modal-sm in" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h2 class="modal-title" id="mySmallModalLabel"> Delete Journal ?</h2>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modal-title" id="mySmallModalLabel">Are you sure you want to delete this journal ?</h4>
                                                </div>
                                                <div class="modal-footer">

                                                    <form method="POST" action="/journal/delete/{{ $journal->id }}">
                                                        @csrf
                                                        <button type="button" class="btn btn-default btn-danger btn-rounded waves-effect waves-light" data-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-default btn-custom btn-rounded waves-effect pull-left" style="margin-right:2px;">Yes</button>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div>
