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
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/remark_1.php" title="View"><i class="entypo-doc-text"></i><span>update remark</span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="/vms/php/logout.php?log" title="Log out">
                                <i class="icon-feed"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                        <li>
                                    <a class="tooltip-tip2 ajax-load" title="View"><span><button onclick="history.back()" class="tooltip-tip2 ajax-load">Go Back</button></span></a>
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
