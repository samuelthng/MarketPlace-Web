<!DOCTYPE html>
<?php 
    define("PAGE", "Main");
    define("CONTEXT", "main");
    include("head.php");
    ses_start();
    validate_session();
?>
<body>
    <div id="minetip-tooltip" style="display:none;">
        <span class="name"></span><br>
        <span class="lore"></span>
        <hr style="color:white;">
        <span>asd</span>
    </div>
    <script src="items/bukkit2icon.js"></script>
    <script src="js/index.js"></script>

    <?php include("nav.php") ?>

    <div class="container" style="height:100vh;">
        <div class="col col-12">
            <div class="inventory">
                
                <div class="title">Latest Items</div>
                <!-- <div class="container">
                    <div class="col col-1"> -->
                        <!-- <div class="slot"> -->
                        <!-- <span class="invslot"><span class="invslot-item"><span class="inv-sprite" data-bukkit="DIAMOND_SWORD" data-id="1176" data-durability="0" data-head="" data-name="<b>hey!</b>" data-lore="0"><span class="amount">2<br></span></span></span></span> -->

                        <?php
                            fetch_main();
                        ?>

                        <!-- <div>
                            <span class="invslot">
                                <span class="invslot-item" data-minetip-title="Dandelion">
                                    <span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-320px -1024px">
                                        <br>
                                    </span>
                                </span>
                            </span>
                            <span class="invslot"><span class="invslot-item" data-minetip-title="Poppy"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-64px -1056px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Blue Orchid"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-128px -1024px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Allium"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-992px -992px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Azure Bluet"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-0px -1024px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Red Tulip"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-224px -1056px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Orange Tulip"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-960px -1024px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="White Tulip"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-576px -1056px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Pink Tulip"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-32px -1056px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Oxeye Daisy"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-992px -1024px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Cornflower"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-640px -2368px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Lily of the Valley"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-672px -2368px"><br></span></span></span><span class="invslot"><span class="invslot-item" data-minetip-title="Wither Rose"><span class="sprite inv-sprite" style="background-image:url(https://minecraft.gamepedia.com/g00/3_c-4tpuljyhma.nhtlwlkph.jvt_/c-4TVYLWOLBZ88x24oaawzx3ax2fx2ftpuljyhma.nhtlwlkph.jvtx2ftlkphx2f1x2f11x2fPucZwypal.wunx3fclyzpvux3d8218500175974x26p87j.thyrx3duvaOATS_$/$/$/$/$);background-position:-608px -2368px"><br></span></span></span></div> -->
                        <!-- </div> -->

                    <!-- </div>
                </div> -->
                <!-- <div class="slot">
                    <img src="https://raw.githubusercontent.com/InventivetalentDev/minecraft-assets/1.13/assets/minecraft/textures/item/acacia_boat.png" alt="">
                </div> -->
            <!-- </div> -->
            <!-- <table class="table table-striped table-dark rounded mt-5">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
            </table> -->
        </div>
    </div>
</body>
</html>