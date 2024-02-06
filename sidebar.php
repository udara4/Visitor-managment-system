

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
                            <a class="tooltip-tip ajax-load" href="../dashboard.php" title="Create Pass">
                                <i class="icon-feed"></i>
                                <span>Home</span>

                            </a>
                        </li>

                       
                        <li>
                            <a class="tooltip-tip ajax-load" href="/vms/php/phone_0.php" title="Create Pass">
                                <i class="icon-feed"></i>
                                <span>Create Pass</span>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="/vms/php/checkout_0.php" title="Check Out">
                                <i class="icon-feed"></i>
                                <span>Check Out</span>

                            </a>
                        </li>
                        <li class="hide1">
                            <a class="tooltip-tip ajax-load" href="#" title="Report">
                                <i class="icon-document-edit"></i>
                                <span>Record Download</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_5.php" title="View"><i class="entypo-doc-text"></i><span>Current Date Count </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_1.php" title="View"><i class="entypo-doc-text"></i><span>Current Month Count </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx.php" title="View"><i class="entypo-doc-text"></i><span>Current Month Details</span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_2.php" title="View"><i class="entypo-doc-text"></i><span>Last Three Month Details </span></a>
                                </li>
                                
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="/vms/php/indexx_3.php" title="View"><i class="entypo-doc-text"></i><span>All Record Count </span></a>
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
