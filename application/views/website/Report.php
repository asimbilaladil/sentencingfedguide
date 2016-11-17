
<style type="text/css">
    table#summary {
    width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
}
table#summary td#months h5 {
    font-size: 1cm;
    color: white;
}
table#summary td h6 {
    font-size: 120%;

}
table#summary td#months {
    background-color: rgba(0, 104, 151, 0.62);
    vertical-align: top;
    color: #FFF;
    padding: 2em
}
table#summary td.other h5 {
    font-size: .8cm;
    font-weight: 400;
}

    table#summary td.other {
    vertical-align: top;
    border-top: 2px solid #e8e8e8;
    border-right: 2px solid #e8e8e8;
    color: #333;
    margin: 0;
    padding: 2.5em;
    padding-left: 3em;;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script> 


</script>
        <section class="inner-page">
            <section>
                <div class="block extra-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 column">
                                <div class="row">
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-10">
                                        <aside class="sidebar">
                                            <div class="widget">
                                                <h4 class="widget-title">Output</h4>
                                                <div id="reportspot">
                                                    <table id="summary">
                                                        <tbody>
                                                            <tr>
                                                                <td id="months">
                                                                <h6 style="color: white;">Months:</h6>
                                                                    <h5 id="sentenceMonth">0-6</h5>
                                                                </td>
                                                                <td class="other">
                                                                    <h6>Zone:</h6>
                                                                    <h5 id="zone" title="a sentence of imprisonment is not required">A</h5>
                                                                </td>
                                                                <td class="other">
                                                                    <h6>Level:</h6>
                                                                    <h5 id="level">6</h5>
                                                                </td>
                                                                <td class="other">
                                                                    <h6>History:</h6>
                                                                    <h5 id="historyText">I</h5>
                                                                </td>
                                                                <td class="other last">
                                                                    <h6>Fine:</h6>
                                                                    <h5>$500 to $5,000</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                 </div>
                                                <!-- Widget Title -->
                                               
                                                <!-- Search Form -->								
                                            </div>
                                            <!-- Widget -->
                                            <div class="widget">
                                                <h4 class="widget-title">Steps</h4>
                                                <!-- Widget Title -->
                                                <ul>
                                                    <li><span onclick="showHide('What_is_the_offense_of_conviction')" tabindex="1"> U.S.C. § </span></li>
                                                    <li><span onclick="showHide('Acceptance_of_Responsibility')" tabindex="2"> Acceptance of Responsibility </span></li>
                                                    <li><span onclick="showHide('Criminal_History_Category')" tabindex="3"> Criminal History </li>
                                                    <li><span onclick="showHide('Career_Offenders_and_Criminal_Livelihood')" tabindex="4">Career Offender and Criminal Livelihood </span></li>
                                                </ul>
                                                <!-- List -->
                                            </div>
                                            <!-- Widget -->
                                            <div class="widget">
                                                <h4 class="widget-title">Form Start</h4>
                                                <!-- Widget Title -->
                                                <div id="What_is_the_offense_of_conviction">
                                                    <form method="POST" action="/dynamic/" name="q6c261a06c5b41d0form" id="q6c261a06c5b41d0form" class="question context6c57" style="display: block;">
                                                        <label for="q6c261a06c5b41d0title">What is the offense of conviction?</label>
                                                        <br>
                                                        <input class="noblur" type="text" name="answertitle" value="18" id="q6c261a06c5b41d0title" size="3">
                                                        <span>U.S.C. §</span>
                                                        <input class="noblur" type="text" name="answersection" id="q6c261a06c5b41d0section" size="10">
                                                        <input type="submit" id="q6c261a06c5b41d0submit" name="q6c261a06c5b41d0submit" value="OK">
                                                        (or, 
                                                        <select onchange="getForm()" id="selectBox" class="codepick">
                                                            <option value="" selected="selected">Pick from frequent statutes</option>
                                                            <option value="8_1324(a)">Alien smuggling</option>
                                                            <option value="18_2113(a)">Bank robbery</option>
                                                            <option value="18_2119">Car jacking</option>
                                                            <option value="18_2252">Child pornography</option>
                                                            <option value="18_1030(a)(2)">Computer fraud</option>
                                                            <option value="18_2319">Copyright infringement</option>
                                                            <option value="18_471">Counterfeiting</option>
                                                            <option value="18_1001">False statement to government agent</option>
                                                            <option value="18_922(g)">Felon in possession of firearm</option>
                                                            <option value="18_1951">Hobbs Act</option>
                                                            <option value="18_2314">Interstate transport/stolen property</option>
                                                            <option value="18_1201(a)">Kidnapping</option>
                                                            <option value="18_1341">Mail fraud</option>
                                                            <option value="18_1111(a)">Murder (federal jurisdiction)</option>
                                                            <option value="18_1503">Obstruction of justice</option>
                                                            <option value="18_1621">Perjury</option>
                                                            <option value="21_841(a)">Possession with intent to distribute</option>
                                                            <option value="8_1326(b)">Reentry following removal</option>
                                                            <option value="18_2251(a)">Sexual exploitation of minors</option>
                                                            <option value="18_1343">Wire fraud</option>
                                                            <option value="2">Weapon</option>
                                                        </select>
                                                        )
                                                        <input type="hidden" id="q6c261a06c5b41d0hidden" name="question" value="6c261a06c5b41d0">
                                                    </form>
                                                </div>    
                                                <div id="dynamicindent">

                                                    <div id="displayForm">

                                                    </div>                                                                
                                                </div>


                                                    <div id="Acceptance_of_Responsibility">
                                                        <h3 id="bd40371c67458de" class="message context2c4a" >Applying § 3E1.1 (Acceptance of Responsibility)</h3>
                                                        <br>
                                                        <form method="POST" action="/dynamic/" name="q2c688af37a8732dform" id="q2c688af37a8732dform" class="question context2c4a" >
                                                            <label>The defendant clearly demonstrates acceptance of responsibility for his offense?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer2c688af37a8732d" id="answer2c688af37a8732d" class="yescheckbox">
                                                            <label for="answer2c688af37a8732d" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q2c688af37a8732dhidden" name="question" value="2c688af37a8732d">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="q4d615265963f9c00form" id="q4d615265963f9c00form" class="question context2c4a" >
                                                            <label>Government moves that the defendant has assisted authorities in the investigation or prosecution of his own misconduct by timely notifying authorities of his intention to enter a plea of guilty, thereby permitting the government to avoid preparing for trial and permitting the government and the court to allocate their resources efficiently?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer4d615265963f9c00" id="answer4d615265963f9c00" class="yescheckbox">
                                                            <label for="answer4d615265963f9c00" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q4d615265963f9c00hidden" name="question" value="4d615265963f9c00">
                                                        </form>
                                                    </div>
                                                    <div id="Criminal_History_Category">
                                                        <h3 id="5e93244a1ece614e" class="message contextd63f" >Applying § 4A1.1 (Criminal History Category)</h3>
                                                        <br>
                                                        <form method="POST" action="/dynamic/" name="q4616a3e9346352f3form" id="q4616a3e9346352f3form" class="question contextd63f" >
                                                            <label for="q4616a3e9346352f3select">What is the defendant's Criminal History Category?</label>
                                                            <br>
                                                            <select onchange="getMonths(this)" name="answer" id="criminalHistory">
                                                                <option value="0">I (0 or 1 points) &nbsp;</option>
                                                                <option value="1">II (2 or 3 points) &nbsp;</option>
                                                                <option value="2">III (4, 5, or 6 points) &nbsp;</option>
                                                                <option value="3">IV (7, 8, or 9 points) &nbsp;</option>
                                                                <option value="4">V (10, 11, or 12 points) &nbsp;</option>
                                                                <option value="5">VI (13 or more points) &nbsp;</option>
                                                                <option value="6">Unknown (calculate here) &nbsp;</option>
                                                            </select>
                                                            <input type="hidden" id="q4616a3e9346352f3hidden" name="question" value="4616a3e9346352f3">
                                                        </form>
                                                    </div>
                                                    <div id="Career_Offenders_and_Criminal_Livelihood">
                                                        <h3 id="5431d1ba7d777b1b" class="message context76c3" style="display: block;">Chapter 4B: Career Offenders and Criminal Livelihood</h3>
                                                        <br>
                                                        <form method="POST" action="/dynamic/" name="q200ef1090dcd5d77form" id="q200ef1090dcd5d77form" class="question context76c3" style="display: block;">
                                                            <label>Which of the following provisions might apply to this defendant?</label>
                                                            <ul style="list-style-type: none">
                                                                <li>
                                                                    <input type="checkbox" id="q200ef1090dcd5d77cb1" name="cb1">
                                                                    <label class="checkboxlabel" for="q200ef1090dcd5d77cb1">§ 4B1.1 (Career Offender)</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="q200ef1090dcd5d77cb2" name="cb2">
                                                                    <label class="checkboxlabel" for="q200ef1090dcd5d77cb2">§ 4B1.3 (Criminal Livelihood)</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="q200ef1090dcd5d77cb3" name="cb3">
                                                                    <label class="checkboxlabel" for="q200ef1090dcd5d77cb3">§ 4B1.4 (Armed Career Criminal)</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="q200ef1090dcd5d77cb4" name="cb4">
                                                                    <label class="checkboxlabel" for="q200ef1090dcd5d77cb4">§ 4B1.5 (Repeat and Dangerous Sex Offender Against Minors)</label>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" id="q200ef1090dcd5d77hidden" name="question" value="200ef1090dcd5d77">
                                                            <br>
                                                        </form>
                                                                                                            <div id="Applying § 4B1.1 (Career Offender)">
                                                        <h3 id="1d866d3a3def6719" class="message context76c3" style="display: block;">Applying § 4B1.1 (Career Offender)</h3>
                                                        <br>
                                                        <form method="POST" action="/dynamic/" name="q77d1260f12d6b198form" id="q77d1260f12d6b198form" class="question context76c3" style="display: block;">
                                                            <label>Defendant was at least eighteen years old at the time the defendant committed the instant offense of conviction?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer77d1260f12d6b198" id="answer77d1260f12d6b198" class="yescheckbox">
                                                            <label for="answer77d1260f12d6b198" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q77d1260f12d6b198hidden" name="question" value="77d1260f12d6b198">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="q7f0babfbac0e0949form" id="q7f0babfbac0e0949form" class="question context76c3" style="display: block;">
                                                            <label>The instant offense of conviction is a felony that is either a crime of violence or a controlled substance offense?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer7f0babfbac0e0949" id="answer7f0babfbac0e0949" class="yescheckbox">
                                                            <label for="answer7f0babfbac0e0949" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q7f0babfbac0e0949hidden" name="question" value="7f0babfbac0e0949">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="q5593c717cb5023b5form" id="q5593c717cb5023b5form" class="question context76c3" style="display: block;">
                                                            <label>The defendant has at least two prior felony convictions of either a crime of violence or a controlled substance offense?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer5593c717cb5023b5" id="answer5593c717cb5023b5" class="yescheckbox">
                                                            <label for="answer5593c717cb5023b5" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q5593c717cb5023b5hidden" name="question" value="5593c717cb5023b5">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="q41a28a3892c802c3form" id="q41a28a3892c802c3form" class="question context76c3" style="display: block;">
                                                            <label>The defendant is convicted of 18 U.S.C. § 924(c) or § 929(a)?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer41a28a3892c802c3" id="answer41a28a3892c802c3" class="yescheckbox">
                                                            <label for="answer41a28a3892c802c3" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q41a28a3892c802c3hidden" name="question" value="41a28a3892c802c3">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="q632f4cb6c2435ea6form" id="q632f4cb6c2435ea6form" class="question context76c3" style="display: block;">
                                                            <label>The only count of conviction is 18 U.S.C. § 924(c) or § 929(a)?</label>
                                                            <br>
                                                            <input type="checkbox" name="answer632f4cb6c2435ea6" id="answer632f4cb6c2435ea6" class="yescheckbox">
                                                            <label for="answer632f4cb6c2435ea6" class="checkboxlabel"> Yes</label>
                                                            <input type="hidden" id="q632f4cb6c2435ea6hidden" name="question" value="632f4cb6c2435ea6">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="q2e36c7ac6ca7a35dform" id="q2e36c7ac6ca7a35dform" class="question context76c3 hiding" >
                                                            <label for="q2e36c7ac6ca7a35dselect">The mandatory minimum consecutive penalty required by the 18 U.S.C. § 924(c) or § 929(a) count(s)?</label>
                                                            <br>
                                                            <select name="answer" id="q2e36c7ac6ca7a35dselect">
                                                                <option value="1">no minimum &nbsp;</option>
                                                                <option value="2">5 years &nbsp;</option>
                                                                <option value="3">7 years &nbsp;</option>
                                                                <option value="4">10 years &nbsp;</option>
                                                                <option value="5">15 years &nbsp;</option>
                                                                <option value="6">25 years &nbsp;</option>
                                                                <option value="7">30 years &nbsp;</option>
                                                            </select>
                                                            <input type="hidden" id="q2e36c7ac6ca7a35dhidden" name="question" value="2e36c7ac6ca7a35d">
                                                        </form>
                                                        <form method="POST" action="/dynamic/" name="qb4e449a39526fa3form" id="qb4e449a39526fa3form" class="question context76c3 hiding" >
                                                            <label for="qb4e449a39526fa3select">Offense statutory maximum?</label>
                                                            <br>
                                                            <select name="answer" id="qb4e449a39526fa3select">
                                                                <option value="1">Life &nbsp;</option>
                                                                <option value="2">25 years or more &nbsp;</option>
                                                                <option value="3">20 years or more, but less than 25 years &nbsp;</option>
                                                                <option value="4">15 years or more, but less than 20 years &nbsp;</option>
                                                                <option value="5">10 years or more, but less than 15 years &nbsp;</option>
                                                                <option value="6">5 years or more, but less than 10 years &nbsp;</option>
                                                                <option value="7">More than 1 year, but less than 5 years &nbsp;</option>
                                                            </select>
                                                            <input type="hidden" id="qb4e449a39526fa3hidden" name="question" value="b4e449a39526fa3">
                                                        </form>
                                                    <div id="Applying § 4B1.3 (Criminal Livelihood)">
                                                    <h3 id="5d4ce65923848f2c" class="message context76c3" style="display: block;">Applying § 4B1.3 (Criminal Livelihood)</h3>
                                                    <br>
                                                    <form method="POST" action="/dynamic/" name="qba115b3b2f9fb0bform" id="qba115b3b2f9fb0bform" class="question context76c3" style="display: block;">
                                                        <label>The defendant committed an offense as part of a pattern of criminal conduct engaged in as a livelihood?</label>
                                                        <br>
                                                        <input type="checkbox" name="answerba115b3b2f9fb0b" id="answerba115b3b2f9fb0b" class="yescheckbox">
                                                        <label for="answerba115b3b2f9fb0b" class="checkboxlabel"> Yes</label>
                                                        <input type="hidden" id="qba115b3b2f9fb0bhidden" name="question" value="ba115b3b2f9fb0b">
                                                    </form>
                                                    </div>
                                                    <div id="Applying § 4B1.4 (Armed Career Criminal)">
                                                    <h3 id="68de5cb7213369d5" class="message context76c3" style="display: block;">Applying § 4B1.4 (Armed Career Criminal)</h3>
                                                    <br>
                                                    <form method="POST" action="/dynamic/" name="q15fda11097bee045form" id="q15fda11097bee045form" class="question context76c3" style="display: block;">
                                                        <label>Defendant is subject to an enhanced sentence under the provisions of 18 U.S.C. § 924(e)?</label>
                                                        <br>
                                                        <input type="checkbox" name="answer15fda11097bee045" id="answer15fda11097bee045" class="yescheckbox">
                                                        <label for="answer15fda11097bee045" class="checkboxlabel"> Yes</label>
                                                        <input type="hidden" id="q15fda11097bee045hidden" name="question" value="15fda11097bee045">
                                                    </form>
                                                    <form method="POST" action="/dynamic/" name="q27c357836c7d582form" id="q27c357836c7d582form" class="question context76c3" style="display: block;">
                                                        <label>The defendant used or possessed the firearm or ammunition in connection with a crime of violence, as defined in § 4B1.2(a)?</label>
                                                        <br>
                                                        <input type="checkbox" name="answer27c357836c7d582" id="answer27c357836c7d582" class="yescheckbox">
                                                        <label for="answer27c357836c7d582" class="checkboxlabel"> Yes</label>
                                                        <input type="hidden" id="q27c357836c7d582hidden" name="question" value="27c357836c7d582">
                                                    </form>
                                                    <form method="POST" action="/dynamic/" name="q4b0c8a1885980009form" id="q4b0c8a1885980009form" class="question context76c3" style="display: block;">
                                                        <label>The defendant used or possessed the firearm or ammunition in connection with a controlled substance offense, as defined in §4B1.2(b)?</label>
                                                        <br>
                                                        <input type="checkbox" name="answer4b0c8a1885980009" id="answer4b0c8a1885980009" class="yescheckbox">
                                                        <label for="answer4b0c8a1885980009" class="checkboxlabel"> Yes</label>
                                                        <input type="hidden" id="q4b0c8a1885980009hidden" name="question" value="4b0c8a1885980009">
                                                    </form>
                                                    </div>
                                                    <div id="Applying § 4B1.5 (Repeat and Dangerous Sex Offender Against Minors)">
                                                    <h3 id="7653f9ab545e57f9" class="message context76c3">Applying § 4B1.5 (Repeat and Dangerous Sex Offender Against Minors)</h3>
                                                    <br>
                                                    <form method="POST" action="/dynamic/" name="q3dafe4a3ccccc66fform" id="q3dafe4a3ccccc66fform" class="question context76c3 hiding" >
                                                        <label>The firearm possessed by the defendant was of a type described in 26 U.S.C. § 5845(a)?</label>
                                                        <br>
                                                        <input type="checkbox" name="answer3dafe4a3ccccc66f" id="answer3dafe4a3ccccc66f" class="yescheckbox">
                                                        <label for="answer3dafe4a3ccccc66f" class="checkboxlabel"> Yes</label>
                                                        <input type="hidden" id="q3dafe4a3ccccc66fhidden" name="question" value="3dafe4a3ccccc66f">
                                                    </form>
                                                    </div>   
                                                    </div>



                                                </div>
                                            </div>
                                            <!-- Widget -->
                                        </aside>
                                        <!-- Sidebar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

<script type="text/javascript">
    
    Acceptance_of_Responsibility.style.display =  "none";
    Criminal_History_Category.style.display  =  "none";
    Career_Offenders_and_Criminal_Livelihood.style.display = "none";

    var showHide = function showHide (id) {

        var What_is_the_offense_of_conviction = document.getElementById("What_is_the_offense_of_conviction");
        var Acceptance_of_Responsibility = document.getElementById("Acceptance_of_Responsibility");
        var Criminal_History_Category = document.getElementById("Criminal_History_Category");
        var Career_Offenders_and_Criminal_Livelihood = document.getElementById("Career_Offenders_and_Criminal_Livelihood");

        What_is_the_offense_of_conviction.style.display =  "none";

        document.getElementById(id).style.display = "";

    }

    var getForm = function getForm() {

        var selectBox = document.getElementById("selectBox");
        var id = selectBox[selectBox.selectedIndex].value
        $.get('<?php echo site_url('Report/getForm') ?>', {
            id : id
        }, function(data) {
            data = JSON.parse(data);
            if ( data.length > 0 ) {
                var filename = data[0].fileName;
                var htmlDiv = data[0].html_div_id;

                loadHtml(filename, htmlDiv);

            }
     
        });  

    }
    
    var getFormChildNode = function getFormChildNode(id) {
        
        $.get('<?php echo site_url('Report/getForm') ?>', {
            id : id
        }, function(data) {
            data = JSON.parse(data);
            if ( data.length > 0 ) {
                console.log(data)
                var filename = data[0].fileName;
                var htmlDiv = data[0].html_div_id;
                loadHtml(filename, htmlDiv);

            }
        });  

    }

    function loadHtml(fileName, div) {
        $("#" + div).load("<?php echo base_url('forms/');  ?>" + fileName);
    }


    function getZone(score) {

        if ( score >= 1 && score <= 8 ) {
            return 'A';
        }

        if ( score >= 9 && score <= 11 ) {
            return 'B';
        }

        if ( score >= 12 && score <= 13 ) {
            return 'C';
        }

        if ( score >= 14 && score <= 43 ) {
            return 'D';
        }
    }

    function getHistory(history) {

        switch (history) {
            case 0:
                return 'I';
            case 1:
                return 'II';
            case 2:
                return 'III';
            case 3:
                return 'IV';
            case 4:
                return 'V';
            case 5:
                return 'VI';
            default:
                return 'I';
        } 
    }

    var idsArray = [];
    var sentenceArray = [
        [0],
        /**************** ZONE A ***************/
        ['0-6', '0-6', '0-6', '0-6', '0-6', '0-6'],
        ['0-6', '0-6', '0-6', '0-6', '0-6', '1-7'],
        ['0-6', '0-6', '0-6', '0-6', '2-8', '3-9'],
        ['0-6', '0-6', '0-6', '2-8', '4-10', '6-12'],
        ['0-6', '0-6', '1-7', '4-10', '6-12', '9-15'],
        ['0-6', '1-7', '2-8', '6-12', '9-15', '12-18'],
        ['0-6', '2-8', '4-10', '8-14', '12-18', '15-21'],
        ['0-6', '4-10', '6-12', '10-16', '15-21', '18-24'],

        /**************** ZONE B ***************/
        ['4-10', '6-12', '8-14', '12-18', '18-24', '21-27'],
        ['6-12', '8-14', '10-16', '15-21', '21-27', '24-30'],
        ['8-14', '10-16', '12-18', '18-24', '24-30', '27-33'],

        /**************** ZONE C ***************/
        ['10-16', '12-18', '15-21', '21-27', '27-33', '30-37'],
        ['12-18', '15-21', '18-24', '24-30', '30-37', '33-41'],

         /**************** ZONE D ***************/
        ['15-21', '18-24', '21-27', '27-33', '33-41', '37-46'],
        ['18-24', '21-27', '24-30', '30-37', '37-46', '41-51'],
        ['21-27', '24-30', '27-33', '33-41', '41-51', '46-57'],
        ['24-30', '27-33', '30-37', '37-46', '46-57', '51-63'],
        ['27-33', '30-37', '33-41', '41-51', '51-63', '57-71'],
        ['30-37', '33-41', '37-46', '46-57', '57-71', '63-78'],
        ['33-41', '37-46', '41-51', '51-63', '63-78', '70-87'],
/*21*/  ['37-46', '41-51', '46-57', '57-71', '70-87', '77-96'],
/*22*/  ['41-51', '46-57', '51-63', '63-78', '77-96', '84-105'],
/*23*/  ['46-57', '51-63', '57-71', '70-87', '84-105', '92-115'],
/*24*/  ['51-63', '57-71', '63-78', '77-96', '92-115', '100-125'],
/*25*/  ['57-71', '63-78', '70-87', '84-105', '100-125', '110-137'],
/*26*/  ['63-78', '70-87', '78-97', '92-115', '110-137', '120-150'],
/*27*/  ['70-87', '78-97', '87-108', '100-125', '120-150', '130-162'],
/*28*/  ['78-97', '87-108', '97-121', '110-137', '130-162', '140-175'],
/*29*/  ['87-108', '97-121', '108-135', '121-151', '140-175', '151-188'],
/*30*/  ['97-121', '108-135', '121-151', '135-168', '151-188', '168-210'],
    ]

    function getMonths(selector) {

        var score = 0;
        idsArray[selector.name] = selector.value;

        for (var index in idsArray) {
            score += parseInt( idsArray[index] );
        }

        score = ( score > 43 ? 43 : score );

        var history = parseInt( $('#criminalHistory').val() );
        var historyText = getHistory( history );

        $('#level').html( score );

        $('#historyText').html( historyText );

        if ( sentenceArray[score][history] ) {
            $('#sentenceMonth').html( sentenceArray[score][history] );
        }

        $('#zone').html( getZone(score) );


    }

</script>


