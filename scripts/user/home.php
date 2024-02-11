<?php require SCRIPTS . '/user/header.php';?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Row</h3>
            </div>
            <div class="card-body">
                <button id="addToTable" class="btn btn-primary mb-15" type="button">
                    <i class="icon wb-plus" aria-hidden="true"></i> Add row
                </button>
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter table-striped" cellspacing="0" id="addrowExample">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr class="gradeA">
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-editing button-discard" data-toggle="tooltip"
                                        data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default m-r-5 button-edit"
                                        data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                            aria-hidden="true"></i></button>
                                    <button class="btn btn-sm btn-icon on-default button-remove" data-toggle="tooltip"
                                        data-original-title="Remove"><i class="icon-trash"
                                            aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require SCRIPTS . '/user/footer.php';?>