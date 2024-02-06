<?php

include('php/dbconn.php');

$sql="Select count(*) from inquery";
$query=mysqli_query($db,$sql);
$fetch=mysqli_fetch_array($query);

?>

 <div id="skin-select">
        <div id="logo">
            <h1>VISITOR MANEGMENT SYSTEM
            </h1>
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        
        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <ul class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="widget-menu"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
                           <li>
                            <a class="tooltip-tip ajax-load" href="/vms/index_1.php" title="Log out">
                                <i class="icon-feed"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li>
                            <a class="tooltip-tip ajax-load" href="#" title="About ACET">
                                <i class="icon-document-edit"></i>
                                <span>ACET</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="http://www.kurunegala.dist.gov.lk/index.php?lang=en" title="Official Site"><i class="entypo-doc-text"></i><span>Official Site</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="#" title="facebook Page"><i class="entypo-doc-text"></i><span>Facebook Page</span></a>
                                </li>
                                <!--<li>
                                    <a class="tooltip-tip2 ajax-load" href="#" title="Blog Page"><i class="entypo-doc-text"></i><span>Blog Page</span></a>
                                </li>-->
                            </ul>
                        </li>
                        
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Employee">
                                <i class="icon-document-edit"></i>
                                <span>Employee</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_insert_0.php" title="Add"><i class="entypo-doc-text"></i><span>Add</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_display_0.php" title="View"><i class="entypo-doc-text"></i><span>View</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_edit1_0.php" title="Edit"><i class="entypo-doc-text"></i><span>Edit</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/emp_delete1_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Delete</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Department">
                                <i class="icon-document-edit"></i>
                                <span>Department</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/department_0.php" title="Add"><i class="entypo-doc-text"></i><span>Add</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/department_display_0.php" title="View"><i class="entypo-doc-text"></i><span>View</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/department_delete_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Delete</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Department">
                                <i class="icon-document-edit"></i>
                                <span>Reson</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/reson_0.php" title="Add"><i class="entypo-doc-text"></i><span>Add</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/reson_display_0.php" title="View"><i class="entypo-doc-text"></i><span>View</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/reson_delete_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Delete</span></a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Admin User">
                                <i class="icon-document-edit"></i>
                                <span>Admin User</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/admin_user_0.php" title="Add"><i class="entypo-doc-text"></i><span>Add</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/admin_display_0.php" title="View"><i class="entypo-doc-text"></i><span>View</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/admin_delete_0.php" title="Delete"><i class="entypo-doc-text"></i><span>Delete</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Report">
                                <i class="icon-document-edit"></i>
                                <span>Report</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/report_0.php" title="Add"><i class="entypo-doc-text"></i><span>Serch by date</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/report_3.php" title="View"><i class="entypo-doc-text"></i><span>Serch by Departments</span></a>
                                </li>
                                <li>
                                
                                    
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/remark_1.php" title="View"><i class="entypo-doc-text"></i><span>update remark</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Report">
                                <i class="icon-document-edit"></i>
                                <span>Record Download</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx.php" title="View"><i class="entypo-doc-text"></i><span>Current Month </span></a>
                                </li>
                 
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_1.php" title="View"><i class="entypo-doc-text"></i><span>Current Month Count </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_2.php" title="View"><i class="entypo-doc-text"></i><span>Last Three Month</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_3.php" title="View"><i class="entypo-doc-text"></i><span>All Record Count </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_4.php" title="View"><i class="entypo-doc-text"></i><span>All Record </span></a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="/vms/php/logout.php?log" title="Log out">
                                <i class="icon-feed"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul>
<script type="text/javascript">
    
                var a=document.getElementsByClassName('hide1')[0];
                var b=document.getElementsByClassName('hide1')[1];
                var c=document.getElementsByClassName('hide1')[2];
                  var d=document.getElementsByClassName('hide1')[3];
</script>
                  <?php
if($user=="guard")
{ ?>
    <script>
        a.style.display="none";
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
    </script>
    <?php
}
?>
                  

                        
                       
                   
                </div>
            </div>
        </div>
    </div>
