<?php
$userid = Yii::app()->user->userid;
$person = TPerson::model()->findAll("status='A'");
$organisation = TOrganization::model()->findAll("status='D'");
$positions = TOrganisationpositions::model()->findAll("status='A'");
$positionsnames = TPersonpositions::model()->findAll("status  IN ('A','D')");
$functionsnames = TFunctions::model()->findAll("status  IN ('A','D')");
$functions = TOrganisationfunctions::model()->findAll("status='A'");
$references = TOrganizationCitation::model()->findAll("status  IN ('A','D')");
$adverseMedia = TAdversemedia::model()->findAll("status='A'");
$adversePeople = TAdversemediaPeople::model()->findAll("status='A'");
$sdn = TSdnEntry::model()->findAll("status='D'");
$categories = TIntelligencecategories::model()->findAll("status='A'");
$update = TSdnfetchedinformation::model()->findAllByPk('sdnFetchedInformationUid');


$personcount = count($person);
$organcount = count($organisation);
$sdncount = count($sdn);
$updatecount = count($update);
$positioncount = count($positions);
$positionsnamescount = count($positionsnames);
$functionscount = count($functions);
$functionsnamescount = count($functionsnames);
$referencescount = count($references);
$adverseMediacount = count($adverseMedia);
$adversePeoplecount = count($adversePeople);
$allowedusers = array("KD003", "WA002", "MP001", "MY004");
?>
<?php if (in_array("$userid", $allowedusers)) { ?>
    <div class="middle-content">
        <div class="row no-m-t no-m-b">
            <section class="row s12" style="margin-left: 5px;">
<!--                <div class="grey-text" style="margin-left: 10px;">-->
                <span class="card-title" style="font-size: 14px; margin-left: 20px">Collections</span><br>
<!--                </div>-->
<!--                    <hr color="DodgerBlue">-->
                <div class="col s12 m5">
                    <div class="card">
                        <div class="card-content z-depth-1">
                            <span class="" style="font-size: 14px;">Sanctions </a></span>
                            <table class="display responsive-table datatable-example">
                                <thead>
                                <tr>
                                    <th style="width: 30px; font-size: 14px;">List</th>
                                    <th style="width: 30px; font-size: 14px;">Attribute</th>
                                    <th style="width: 30px; font-size: 14px;">Update</th>
                                    <th style="width: 30px; font-size: 14px;">Total</th>
                                </tr>
                                </thead>
                                <tfoot><tr></br></tr></tfoot>
                                <tbody>
                                    <tr >
                                    <td style="font-size: 14px;">SDN</td>
                                    <td style="font-size: 14px;">Entry</td>
                                    <td style="font-size: 14px;"><?php echo number_format($updatecount);?></td>
                                    <td style="font-size: 14px;"><?php echo number_format($sdncount); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-content z-depth-1">
                            <span class="" style="font-size: 14px;">PEP<a class="right"></a></span>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-content z-depth-1">
                            <span class="" style="font-size: 14px;">Adverse Media<a class="right"></a></span>
                        </div>
                    </div>
                </div>
<!--                </div>-->
            </section>
        </div>

        <div class="row no-m-t no-m-b">
            <section class="row s12" style="margin-left: 5px;">
                <span class="card-title " style="font-size: 14px; margin-left: 20px">Intelligence</span><br>
<!--                <div class="grey-text" style="margin-left: 10px;">-->
<!--                    <hr color="DodgerBlue">-->
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content z-depth-1">
                                <span class="" style="font-size: 14px;"><a class="right"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content z-depth-1">
                                <span class="" style="font-size: 14px;"><a class="right"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content z-depth-1">
                                <span class="" style="font-size: 14px;"></span><a class="right"></a>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    <div class="row no-m-t no-m-b">
            <section class="row s12" style="margin-left: 5px;">
                <span class="card-title " style="font-size: 14px; margin-left: 20px">Distribution</span><br>
<!--                <div class="grey-text" style="margin-left: 10px;">-->
<!--                    <hr color="DodgerBlue">-->
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content z-depth-1">
                                <span class="" style="font-size: 14px;"><a class="right"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content z-depth-1">
                                <span class="" style="font-size: 14px;"><a class="right"></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card">
                            <div class="card-content z-depth-1">
                                <span class="" style="font-size: 14px;"><a class="right"></a></span>
                            </div>
                        </div>
                    </div>
<!--                </div>-->
            </section>
        </div>

    </div>
    <div class="inner-sidebar">
        <span class="inner-sidebar-title">New Messages</span>
        <div class="message-list">
            <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
            <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
            <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
        </div>
        <span class="inner-sidebar-title">Events</span>
        <span class="info-item">Envato meeting<span class="new badge">12</span></span>
        <div class="inner-sidebar-divider"></div>
        <span class="info-item">Google I/O</span>
        <div class="inner-sidebar-divider"></div>
        <span class="info-item disabled">No more events scheduled</span>
        <div class="inner-sidebar-divider"></div>

        <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
        <!--<div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>-->
    </div>
<?php } else {
    
}
?>