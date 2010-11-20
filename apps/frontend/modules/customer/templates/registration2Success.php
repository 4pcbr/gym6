        <img src="/img/temp/a2.jpg" />

            <div class="reg2">
                <form method="POST" action="" id="registration_form">
                    <div class="tab select_advanced" id="tabs">
                        <a href="#" class="s">Simple</a>
                        <strong class="a">Advanced</strong>
                    </div>
                    <div class="reg_date" id="reg_date">
                        <h2>Set your schedule <a href="#" class="q"></a></h2>
                        <div id="week-date-selector" class="days">
                            <a href="#" class="first" value="1">Mon</a>
                            <a href="#" value="2">Tu</a>
                            <a href="#" value="3">Wed</a>
                            <a href="#" value="4">Thu</a>
                            <a href="#" value="5">Fri</a>
                            <a href="#" class="pink" value="6">Sat</a>
                            <a href="#" class="last pink" value="0">Sun</a>
                        </div>
                        <div class="weeks" id="month-date-selector">
                            <div class="month">
                                <h3><?php echo $n_o_month?></h3>
                                <?php $mv=0; foreach($mdays as $mweeks) {?>
                                <?php $c = ($mv?($mv==5?'pink':($mv==6?'pink last':'')):'first'); $mv++;?>
                                <div class="<?php echo $c ?>" day="<?php echo $mv?>">
                                <?php foreach($mweeks as $mdays) {?>
                                <a href="#" title="<?php echo $mdays['date'] ?>"><?php echo $mdays['view'] ?></a>
                                <?php } ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="month">
                                <h3><?php echo $n_o_month1 ?></h3>
                                <?php $mv=0; foreach($mdays1 as $mweeks) {?>
                                <?php $c = ($mv?($mv==5?'pink':($mv==6?'pink last':'')):'first'); $mv++;?>
                                <div class="<?php echo $c ?>" day="<?php echo $mv?>">
                                <?php foreach($mweeks as $mdays) {?>
                                <a href="#" title="<?php echo $mdays['date'] ?>"><?php echo $mdays['view'] ?></a>
                                <?php } ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="month">
                                <h3>October</h3>
                                <div class="first" day="1"><a href="#" date="2010.09.27">27</a><a href="#" date="2010.10.04">4</a><a href="#" date="2010.10.11">11</a><a href="#" date="2010.10.18">18</a><a href="#" date="2010.10.25">25</a></div>
                                <div day="2"><a href="#" date="2010.09.28">28</a><a href="#" date="2010.10.05">5</a><a href="#" date="2010.10.12">12</a><a href="#" date="2010.10.19">19</a><a href="#" date="2010.10.26">26</a></div>
                                <div day="3"><a href="#" date="2010.09.29">29</a><a href="#" date="2010.10.06">6</a><a href="#" date="2010.10.13">13</a><a href="#" date="2010.10.20">20</a><a href="#" date="2010.10.27">27</a></div>
                                <div day="4"><a href="#" date="2010.09.30">30</a><a href="#" date="2010.10.07">7</a><a href="#" date="2010.10.14">14</a><a href="#" date="2010.10.21">21</a><a href="#" date="2010.10.28">28</a></div>
                                <div day="5"><a href="#" date="2010.10.01">1</a><a href="#" date="2010.10.08">8</a><a href="#" date="2010.10.15">15</a><a href="#" date="2010.10.22">22</a><a href="#" date="2010.10.29">29</a></div>
                                <div class="pink" day="6"><a href="#" date="2010.10.02">2</a><a href="#" date="2010.10.09">9</a><a href="#" date="2010.10.16">16</a><a href="#" date="2010.10.23">23</a><a href="#" date="2010.10.30">30</a></div>
                                <div class="pink last" day="0"><a href="#" date="2010.10.03">3</a><a href="#" date="2010.10.10">10</a><a href="#" date="2010.10.17">17</a><a href="#" date="2010.10.24">24</a><a href="#" date="2010.10.31">31</a></div>
                            </div>
                             <div class="month">
                                <h3>November</h3>
                                <div class="first" day="1"><a href="#" date="2010.11.01">1</a><a href="#" date="2010.11.08">8</a><a href="#" date="2010.11.15">15</a><a href="#" date="2010.11.22">22</a><a href="#" date="2010.11.29">29</a></div>
                                <div day="2"><a href="#" date="2010.11.02">2</a><a href="#" date="2010.11.09">9</a><a href="#" date="2010.11.16">16</a><a href="#" date="2010.11.23">23</a><a href="#" date="2010.11.30">30</a></div>
                                <div day="3"><a href="#" date="2010.11.03">3</a><a href="#" date="2010.11.10">10</a><a href="#" date="2010.11.17">17</a><a href="#" date="2010.11.24">24</a><a href="#" date="2010.12.01">1</a></div>
                                <div day="4"><a href="#" date="2010.11.04">4</a><a href="#" date="2010.11.11">11</a><a href="#" date="2010.11.18">18</a><a href="#" date="2010.11.25">25</a><a href="#" date="2010.12.02">2</a></div>
                                <div day="5"><a href="#" date="2010.11.05">5</a><a href="#" date="2010.11.12">12</a><a href="#" date="2010.11.19">19</a><a href="#" date="2010.11.26">26</a><a href="#" date="2010.12.03">3</a></div>
                                <div class="pink" day="6"><a href="#" date="2010.11.06">6</a><a href="#" date="2010.11.13">13</a><a href="#" date="2010.11.20">20</a><a href="#" date="2010.11.27">27</a><a href="#" date="2010.12.04">4</a></div>
                                <div class="pink last" day="0"><a href="#" date="2010.11.07">7</a><a href="#" date="2010.11.14">14</a><a href="#" date="2010.11.21">21</a><a href="#" date="2010.11.28">28</a><a href="#" date="2010.12.05">5</a></div>
                            </div>
                        </div>
                        <input type="hidden" name="data[dates]" id="data_dates" value=""/>
                     </div>

                    <div class="reg_length">
                        <h2>Choose your length</h2>
                        <div style="position:relative; padding:20px 0; width:330px;">
                            <span style="position:absolute; top:9px; left:-30px;">min</span>
                            <div id="scalable-set">
                                <span class="raz" style="left:10px;">10</span>
                                <span class="raz" style="left:100px;">35</span>
                                <span class="raz" style="left:50%;">50</span>
                                <span class="raz" style="left:80%">80</span>
                            </div>
                            <div class="slider" id="slider_length"></div>
                            <input type="hidden" name="data[length]" id="data_length" value="50" />
                        </div>
                    </div>


                    <div class="reg_complexity">
                        <h2>Choose your complexity</h2>
                        <div id="complexity-set">
                            <a value="1" href="#" class="c1">Easy</a>
                            <a value="2" href="#" class="c2">Normal</a>
                            <a value="3" href="#" class="c3">Hard</a>
                            <a value="4" href="#" class="c4">Pro</a>
                        </div>
                        <input type="hidden" name="data[complexity]" id="data_complexity" value="2" />
                    </div>

                    <div class="reg_setting" id="reg_setting">
                        <div class="men">
                            <i class="s1" id="indicator-prelum"></i>
                            <i class="s2" id="indicator-arms"></i>
                            <i class="s3" id="indicator-legs"></i>
                            <i class="s4" id="indicator-flexibility"></i>
                            <i class="s5" id="indicator-buttocks"></i>
                        </div>

                        <h2>Настрой-ка</h2>

                        <div style="width:340px; padding-bottom:5px;"><span style="float:right">max</span>min</div>
                        <div class="slider" id="arms-slider"><span>Arms</span></div>
                        <input type="hidden" name="data[arms]" id="data_arms" value="" />
                        <div class="slider" id="prelum-slider"><span>Prelum</span></div>
                        <input type="hidden" name="data[prelum]" id="data_prelum" value="" />
                        <div class="slider" id="legs-slider"><span>Legs</span></div>
                        <input type="hidden" name="data[legs]" id="data_legs" value="" />
                        <div class="slider" id="flexibility-slider"><span>Flexibility</span></div>
                        <input type="hidden" name="data[flexibility]" id="data_flexibility" value="" />
                        <div class="slider" id="buttocks-slider"><span>Buttocks</span></div>
                        <input type="hidden" name="data[buttocks]" id="data_buttocks" value="" />
                    </div>

                    <a href="#" class="sip"></a>
                </form>
            </div>
<script type="text/javascript">registration()</script>