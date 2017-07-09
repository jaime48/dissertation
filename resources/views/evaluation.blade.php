<!-------------------------------------------------------->
<script src="{{asset('js/jquery.js')}}"></script>
{{--<script src="{{asset('js/bootstrap.js')}}"></script>--}}
<!-- Bootstrap Core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
<!-- Custom Fonts -->
<html lang="en"><head>
    <title>Questionnaire for User Interface Satisfaction</title>
    <style type='text/css'>
        .comment { backgound: #FFD; }
    </style>
</head>
<body bgcolor=white>
<!-----------------------navigation--------------------------->
@include('navi')
<div style="min-height:1300px">
<div class="col-md-9 col-md-offset-2" >
<!------------------------------------------------------------>
<table id=title bgcolor="#eeeeee" border=1><tr><th>
            <font size=+2>Questionnaire for User Interface Satisfaction</font>
        </th></tr>
    <tr><td>
            <font size=-1><b>Based on:</b>
                Chin,&nbsp;J.P., Diehl,&nbsp;V.A., Norman,&nbsp;K.L. (1988)
                <i>Development of an Instrument Measuring User Satisfaction
                    of the Human-Computer Interface.</i>
                <b>ACM CHI'88 Proceedings</b>,
                213-218.
                &copy;1988&nbsp;ACM.
                <a href='http://hcibib.org/search:quest==C.CHI.88.213'>[Abstract]</a>
                Copying without fee is permitted provided that the copies are not made or distributed
                for direct commercial advantage, and credit to the source is given.
                &copy;1986-1998 University of Maryland.
                This display is for educational uses only.
                <b>Commercial use requires a license from the Office of Technology Commercialization</b>:
                (301) 403-2711
                <a href=mailto:otc@@umail.umd.edu>otc@umail.umd.edu</a>.
                <a href=http://www.cs.umd.edu/hcil/quis/>[QUIS Home Page]</a>
            </font>
            | <a href=index.html><font size=-2 color="#666666">About&nbsp;quest.cgi<font></a>
        </td></tr>
</table>
    <div class="col-md-12 col-md-offset-1" style="align-self: center">

    Please rate your satisfaction with the system.
<ul>
    <li>Try to respond to all the items.</li>
</ul>
<form method='post' action="questionnaireSubmit">
    {{csrf_field()}}
    <table>
        <tr>
            <td>What's your age group:
                <select name="age">
                    <option value='' selected="selected" disabled="disabled">Please select</option>
                    <option value='18'><18</option>
                    <option value='30'>18-30</option>
                    <option value='50'>30-50</option>
                    <option value='80'>>50</option>
                </select>
            </td>

        </tr><br><br>
        <tr>
            <td width="50%">How long have you been using this website:
                <select name="use">
                    <option value='' selected="selected" disabled="disabled">Please select</option>
                    <option value='1'>< 1 month</option>
                    <option value='12'>1 month to one year</option>
                    <option value='36'>one year to three years</option>
                    <option value='48'>> three years</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="50%">have you used a similar software before:
            Yes<input type='radio' id='q1_0' name='used_before' value="1" >&nbsp;&nbsp;&nbsp;
            No<input type='radio' id='q1_1' name='used_before' value="0">
            </td>
        </tr>
        <tr>
            <td>Please rate yourself:
                <select name="rate_yourself">
                    <option value='' selected="selected" disabled="disabled">Please select</option>
                    <option value='0'>beginner</option>
                    <option value='1'>knowledgeable</option>
                    <option value='2'>expert</option>

                </select>
            </td>

        </tr><br>

    </table>
    <table id=ratings  border=0>

        <tr bgcolor="#dddddd" valign=middle> <td colspan=2><b>OVERALL REACTION TO THE SOFTWARE</b></td>
            <td>&nbsp;</td><th scope="col">0</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col"></th>
        </tr><tr valign=top><td align=right><a name=q1>1.</a></td>
            <td>
            </td>
            <td align=right><font size="-1">terrible</font></td>
            <td><input type='radio' id='q1_0' name='q1[]' title='0 (terrible)' value='0' ></td>
            <td><input type='radio' id='q1_1' name='q1[]' title='1' value='1' ></td>
            <td><input type='radio' id='q1_2' name='q1[]' title='2' value='2' ></td>
            <td><input type='radio' id='q1_3' name='q1[]' title='3' value='3' ></td>
            <td><input type='radio' id='q1_4' name='q1[]' title='4' value='4' ></td>
            <td><input type='radio' id='q1_5' name='q1[]' title='5' value='5' ></td>
            <td><input type='radio' id='q1_6' name='q1[]' title='6' value='6' ></td>
            <td><input type='radio' id='q1_7' name='q1[]' title='7' value='7' ></td>
            <td><input type='radio' id='q1_8' name='q1[]' title='8' value='8' ></td>
            <td><input type='radio' id='q1_9' name='q1[]' title='9 (wonderful)' value='9' ></td>
            <td align=left><font size="-1">wonderful</font></td>
            <td></td>
        </tr><tr valign=top><td align=right><a name=q2>2.</a></td>
            <td>
            </td>
            <td align=right><font size="-1">difficult</font></td>
            <td><input type='radio' id='q2_0' name='q2[]' title='0 (difficult)' value='0' ></td>
            <td><input type='radio' id='q2_1' name='q2[]' title='1' value='1' ></td>
            <td><input type='radio' id='q2_2' name='q2[]' title='2' value='2' ></td>
            <td><input type='radio' id='q2_3' name='q2[]' title='3' value='3' ></td>
            <td><input type='radio' id='q2_4' name='q2[]' title='4' value='4' ></td>
            <td><input type='radio' id='q2_5' name='q2[]' title='5' value='5' ></td>
            <td><input type='radio' id='q2_6' name='q2[]' title='6' value='6' ></td>
            <td><input type='radio' id='q2_7' name='q2[]' title='7' value='7' ></td>
            <td><input type='radio' id='q2_8' name='q2[]' title='8' value='8' ></td>
            <td><input type='radio' id='q2_9' name='q2[]' title='9 (easy)' value='9' ></td>
            <td align=left><font size="-1">easy</font></td>

        </tr><tr valign=top><td align=right><a name=q3>3.</a></td>
            <td>
            </td>
            <td align=right><font size="-1">frustrating</font></td>
            <td><input type='radio' id='q3_0' name='q3[]' title='0 (frustrating)' value='0' ></td>
            <td><input type='radio' id='q3_1' name='q3[]' title='1' value='1' ></td>
            <td><input type='radio' id='q3_2' name='q3[]' title='2' value='2' ></td>
            <td><input type='radio' id='q3_3' name='q3[]' title='3' value='3' ></td>
            <td><input type='radio' id='q3_4' name='q3[]' title='4' value='4' ></td>
            <td><input type='radio' id='q3_5' name='q3[]' title='5' value='5' ></td>
            <td><input type='radio' id='q3_6' name='q3[]' title='6' value='6' ></td>
            <td><input type='radio' id='q3_7' name='q3[]' title='7' value='7' ></td>
            <td><input type='radio' id='q3_8' name='q3[]' title='8' value='8' ></td>
            <td><input type='radio' id='q3_9' name='q3[]' title='9 (satisfying)' value='9' ></td>
            <td align=left><font size="-1">satisfying</font></td>

        </tr><tr valign=top><td align=right><a name=q4>4.</a></td>
            <td>
            </td>
            <td align=right><font size="-1">inadequate power</font></td>
            <td><input type='radio' id='q4_0' name='q4[]' title='0 (inadequate power)' value='0' ></td>
            <td><input type='radio' id='q4_1' name='q4[]' title='1' value='1' ></td>
            <td><input type='radio' id='q4_2' name='q4[]' title='2' value='2' ></td>
            <td><input type='radio' id='q4_3' name='q4[]' title='3' value='3' ></td>
            <td><input type='radio' id='q4_4' name='q4[]' title='4' value='4' ></td>
            <td><input type='radio' id='q4_5' name='q4[]' title='5' value='5' ></td>
            <td><input type='radio' id='q4_6' name='q4[]' title='6' value='6' ></td>
            <td><input type='radio' id='q4_7' name='q4[]' title='7' value='7' ></td>
            <td><input type='radio' id='q4_8' name='q4[]' title='8' value='8' ></td>
            <td><input type='radio' id='q4_9' name='q4[]' title='9 (adequate power)' value='9' ></td>
            <td align=left><font size="-1">adequate power</font></td>
        </tr><tr valign=top><td align=right><a name=q5>5.</a></td>
            <td>
            </td>
            <td align=right><font size="-1">dull</font></td>
            <td><input type='radio' id='q5_0' name='q5[]' title='0 (dull)' value='0' ></td>
            <td><input type='radio' id='q5_1' name='q5[]' title='1' value='1' ></td>
            <td><input type='radio' id='q5_2' name='q5[]' title='2' value='2' ></td>
            <td><input type='radio' id='q5_3' name='q5[]' title='3' value='3' ></td>
            <td><input type='radio' id='q5_4' name='q5[]' title='4' value='4' ></td>
            <td><input type='radio' id='q5_5' name='q5[]' title='5' value='5' ></td>
            <td><input type='radio' id='q5_6' name='q5[]' title='6' value='6' ></td>
            <td><input type='radio' id='q5_7' name='q5[]' title='7' value='7' ></td>
            <td><input type='radio' id='q5_8' name='q5[]' title='8' value='8' ></td>
            <td><input type='radio' id='q5_9' name='q5[]' title='9 (stimulating)' value='9' ></td>
            <td align=left><font size="-1">stimulating</font></td>
        </tr><tr valign=top><td align=right><a name=q6>6.</a></td>
            <td>
            </td>
            <td align=right><font size="-1">rigid</font></td>
            <td><input type='radio' id='q6_0' name='q6[]' title='0 (rigid)' value='0' ></td>
            <td><input type='radio' id='q6_1' name='q6[]' title='1' value='1' ></td>
            <td><input type='radio' id='q6_2' name='q6[]' title='2' value='2' ></td>
            <td><input type='radio' id='q6_3' name='q6[]' title='3' value='3' ></td>
            <td><input type='radio' id='q6_4' name='q6[]' title='4' value='4' ></td>
            <td><input type='radio' id='q6_5' name='q6[]' title='5' value='5' ></td>
            <td><input type='radio' id='q6_6' name='q6[]' title='6' value='6' ></td>
            <td><input type='radio' id='q6_7' name='q6[]' title='7' value='7' ></td>
            <td><input type='radio' id='q6_8' name='q6[]' title='8' value='8' ></td>
            <td><input type='radio' id='q6_9' name='q6[]' title='9 (flexible)' value='9' ></td>
            <td align=left><font size="-1">flexible</font></td>
        </tr><tr bgcolor="#dddddd" valign=middle> <td colspan=2><b>SCREEN</b></td>
            <td>&nbsp;</td><th scope="col">0</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col"></th>
        </tr><tr valign=top><td align=right><a name=q7>7.</a></td>
            <td><label for=q7>Reading characters on the screen</label>&nbsp;
            </td>
            <td align=right><font size="-1">hard</font></td>
            <td><input type='radio' id='q7_0' name='q7[]' title='0 (hard)' value='0' ></td>
            <td><input type='radio' id='q7_1' name='q7[]' title='1' value='1' ></td>
            <td><input type='radio' id='q7_2' name='q7[]' title='2' value='2' ></td>
            <td><input type='radio' id='q7_3' name='q7[]' title='3' value='3' ></td>
            <td><input type='radio' id='q7_4' name='q7[]' title='4' value='4' ></td>
            <td><input type='radio' id='q7_5' name='q7[]' title='5' value='5' ></td>
            <td><input type='radio' id='q7_6' name='q7[]' title='6' value='6' ></td>
            <td><input type='radio' id='q7_7' name='q7[]' title='7' value='7' ></td>
            <td><input type='radio' id='q7_8' name='q7[]' title='8' value='8' ></td>
            <td><input type='radio' id='q7_9' name='q7[]' title='9 (easy)' value='9' ></td>
            <td align=left><font size="-1">easy</font></td>
        </tr><tr valign=top><td align=right><a name=q8>8.</a></td>
            <td><label for=q8>Highlighting simplifies task</label>&nbsp;
            </td>
            <td align=right><font size="-1">not at all</font></td>
            <td><input type='radio' id='q8_0' name='q8[]' title='0 (not at all)' value='0' ></td>
            <td><input type='radio' id='q8_1' name='q8[]' title='1' value='1' ></td>
            <td><input type='radio' id='q8_2' name='q8[]' title='2' value='2' ></td>
            <td><input type='radio' id='q8_3' name='q8[]' title='3' value='3' ></td>
            <td><input type='radio' id='q8_4' name='q8[]' title='4' value='4' ></td>
            <td><input type='radio' id='q8_5' name='q8[]' title='5' value='5' ></td>
            <td><input type='radio' id='q8_6' name='q8[]' title='6' value='6' ></td>
            <td><input type='radio' id='q8_7' name='q8[]' title='7' value='7' ></td>
            <td><input type='radio' id='q8_8' name='q8[]' title='8' value='8' ></td>
            <td><input type='radio' id='q8_9' name='q8[]' title='9 (very much)' value='9' ></td>
            <td align=left><font size="-1">very much</font></td>
        </tr><tr valign=top><td align=right><a name=q9>9.</a></td>
            <td><label for=q9>Organization of information</label>
            </td>
            <td align=right><font size="-1">confusing</font></td>
            <td><input type='radio' id='q9_0' name='q9[]' title='0 (confusing)' value='0' ></td>
            <td><input type='radio' id='q9_1' name='q9[]' title='1' value='1' ></td>
            <td><input type='radio' id='q9_2' name='q9[]' title='2' value='2' ></td>
            <td><input type='radio' id='q9_3' name='q9[]' title='3' value='3' ></td>
            <td><input type='radio' id='q9_4' name='q9[]' title='4' value='4' ></td>
            <td><input type='radio' id='q9_5' name='q9[]' title='5' value='5' ></td>
            <td><input type='radio' id='q9_6' name='q9[]' title='6' value='6' ></td>
            <td><input type='radio' id='q9_7' name='q9[]' title='7' value='7' ></td>
            <td><input type='radio' id='q9_8' name='q9[]' title='8' value='8' ></td>
            <td><input type='radio' id='q9_9' name='q9[]' title='9 (very clear)' value='9' ></td>
            <td align=left><font size="-1">very clear</font></td>
        </tr><tr valign=top><td align=right><a name=q10>10.</a></td>
            <td><label for=q10>Sequence of screens</label>
            </td>
            <td align=right><font size="-1">confusing</font></td>
            <td><input type='radio' id='q10_0' name='q10[]' title='0 (confusing)' value='0' ></td>
            <td><input type='radio' id='q10_1' name='q10[]' title='1' value='1' ></td>
            <td><input type='radio' id='q10_2' name='q10[]' title='2' value='2' ></td>
            <td><input type='radio' id='q10_3' name='q10[]' title='3' value='3' ></td>
            <td><input type='radio' id='q10_4' name='q10[]' title='4' value='4' ></td>
            <td><input type='radio' id='q10_5' name='q10[]' title='5' value='5' ></td>
            <td><input type='radio' id='q10_6' name='q10[]' title='6' value='6' ></td>
            <td><input type='radio' id='q10_7' name='q10[]' title='7' value='7' ></td>
            <td><input type='radio' id='q10_8' name='q10[]' title='8' value='8' ></td>
            <td><input type='radio' id='q10_9' name='q10[]' title='9 (very clear)' value='9' ></td>
            <td align=left><font size="-1">very clear</font></td>
            <td></td>
        </tr><tr bgcolor="#dddddd" valign=middle> <td colspan=2><b>TERMINOLOGY AND SYSTEM INFORMATION</b></td>
            <td>&nbsp;</td><th scope="col">0</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col"></th>
        </tr><tr valign=top><td align=right><a name=q11>11.</a></td>
            <td><label for=q11>Use of terms throughout system</label>
            </td>
            <td align=right><font size="-1">inconsistent</font></td>
            <td><input type='radio' id='q11_0' name='q11[]' title='0 (inconsistent)' value='0' ></td>
            <td><input type='radio' id='q11_1' name='q11[]' title='1' value='1' ></td>
            <td><input type='radio' id='q11_2' name='q11[]' title='2' value='2' ></td>
            <td><input type='radio' id='q11_3' name='q11[]' title='3' value='3' ></td>
            <td><input type='radio' id='q11_4' name='q11[]' title='4' value='4' ></td>
            <td><input type='radio' id='q11_5' name='q11[]' title='5' value='5' ></td>
            <td><input type='radio' id='q11_6' name='q11[]' title='6' value='6' ></td>
            <td><input type='radio' id='q11_7' name='q11[]' title='7' value='7' ></td>
            <td><input type='radio' id='q11_8' name='q11[]' title='8' value='8' ></td>
            <td><input type='radio' id='q11_9' name='q11[]' title='9 (consistent)' value='9' ></td>
            <td align=left><font size="-1">consistent</font></td>
        </tr><tr valign=top><td align=right><a name=q12>12.</a></td>
            <td><label for=q12>Terminology related to task</label>
            </td>
            <td align=right><font size="-1">never</font></td>
            <td><input type='radio' id='q12_0' name='q12[]' title='0 (never)' value='0' ></td>
            <td><input type='radio' id='q12_1' name='q12[]' title='1' value='1' ></td>
            <td><input type='radio' id='q12_2' name='q12[]' title='2' value='2' ></td>
            <td><input type='radio' id='q12_3' name='q12[]' title='3' value='3' ></td>
            <td><input type='radio' id='q12_4' name='q12[]' title='4' value='4' ></td>
            <td><input type='radio' id='q12_5' name='q12[]' title='5' value='5' ></td>
            <td><input type='radio' id='q12_6' name='q12[]' title='6' value='6' ></td>
            <td><input type='radio' id='q12_7' name='q12[]' title='7' value='7' ></td>
            <td><input type='radio' id='q12_8' name='q12[]' title='8' value='8' ></td>
            <td><input type='radio' id='q12_9' name='q12[]' title='9 (always)' value='9' ></td>
            <td align=left><font size="-1">always</font></td>
            <td></td>
        </tr><tr valign=top><td align=right><a name=q13>13.</a></td>
            <td><label for=q13>Position of messages on screen</label>
            </td>
            <td align=right><font size="-1">inconsistent</font></td>
            <td><input type='radio' id='q13_0' name='q13[]' title='0 (inconsistent)' value='0' ></td>
            <td><input type='radio' id='q13_1' name='q13[]' title='1' value='1' ></td>
            <td><input type='radio' id='q13_2' name='q13[]' title='2' value='2' ></td>
            <td><input type='radio' id='q13_3' name='q13[]' title='3' value='3' ></td>
            <td><input type='radio' id='q13_4' name='q13[]' title='4' value='4' ></td>
            <td><input type='radio' id='q13_5' name='q13[]' title='5' value='5' ></td>
            <td><input type='radio' id='q13_6' name='q13[]' title='6' value='6' ></td>
            <td><input type='radio' id='q13_7' name='q13[]' title='7' value='7' ></td>
            <td><input type='radio' id='q13_8' name='q13[]' title='8' value='8' ></td>
            <td><input type='radio' id='q13_9' name='q13[]' title='9 (consistent)' value='9' ></td>
            <td align=left><font size="-1">consistent</font></td>
        </tr><tr valign=top><td align=right><a name=q14>14.</a></td>
            <td><label for=q14>Prompts for input</label>
            </td>
            <td align=right><font size="-1">confusing</font></td>
            <td><input type='radio' id='q14_0' name='q14[]' title='0 (confusing)' value='0' ></td>
            <td><input type='radio' id='q14_1' name='q14[]' title='1' value='1' ></td>
            <td><input type='radio' id='q14_2' name='q14[]' title='2' value='2' ></td>
            <td><input type='radio' id='q14_3' name='q14[]' title='3' value='3' ></td>
            <td><input type='radio' id='q14_4' name='q14[]' title='4' value='4' ></td>
            <td><input type='radio' id='q14_5' name='q14[]' title='5' value='5' ></td>
            <td><input type='radio' id='q14_6' name='q14[]' title='6' value='6' ></td>
            <td><input type='radio' id='q14_7' name='q14[]' title='7' value='7' ></td>
            <td><input type='radio' id='q14_8' name='q14[]' title='8' value='8' ></td>
            <td><input type='radio' id='q14_9' name='q14[]' title='9 (clear)' value='9' ></td>
            <td align=left><font size="-1">clear</font></td>
        </tr><tr valign=top><td align=right><a name=q15>15.</a></td>
            <td><label for=q15>Computer informs about its progress</label>
            </td>
            <td align=right><font size="-1">never</font></td>
            <td><input type='radio' id='q15_0' name='q15[]' title='0 (never)' value='0' ></td>
            <td><input type='radio' id='q15_1' name='q15[]' title='1' value='1' ></td>
            <td><input type='radio' id='q15_2' name='q15[]' title='2' value='2' ></td>
            <td><input type='radio' id='q15_3' name='q15[]' title='3' value='3' ></td>
            <td><input type='radio' id='q15_4' name='q15[]' title='4' value='4' ></td>
            <td><input type='radio' id='q15_5' name='q15[]' title='5' value='5' ></td>
            <td><input type='radio' id='q15_6' name='q15[]' title='6' value='6' ></td>
            <td><input type='radio' id='q15_7' name='q15[]' title='7' value='7' ></td>
            <td><input type='radio' id='q15_8' name='q15[]' title='8' value='8' ></td>
            <td><input type='radio' id='q15_9' name='q15[]' title='9 (always)' value='9' ></td>
            <td align=left><font size="-1">always</font></td>
        </tr><tr valign=top><td align=right><a name=q16>16.</a></td>
            <td><label for=q16>Error messages</label>
            </td>
            <td align=right><font size="-1">unhelpful</font></td>
            <td><input type='radio' id='q16_0' name='q16[]' title='0 (unhelpful)' value='0' ></td>
            <td><input type='radio' id='q16_1' name='q16[]' title='1' value='1' ></td>
            <td><input type='radio' id='q16_2' name='q16[]' title='2' value='2' ></td>
            <td><input type='radio' id='q16_3' name='q16[]' title='3' value='3' ></td>
            <td><input type='radio' id='q16_4' name='q16[]' title='4' value='4' ></td>
            <td><input type='radio' id='q16_5' name='q16[]' title='5' value='5' ></td>
            <td><input type='radio' id='q16_6' name='q16[]' title='6' value='6' ></td>
            <td><input type='radio' id='q16_7' name='q16[]' title='7' value='7' ></td>
            <td><input type='radio' id='q16_8' name='q16[]' title='8' value='8' ></td>
            <td><input type='radio' id='q16_9' name='q16[]' title='9 (helpful)' value='9' ></td>
            <td align=left><font size="-1">helpful</font></td>
        </tr><tr bgcolor="#dddddd" valign=middle> <td colspan=2><b>LEARNING</b></td>
            <td>&nbsp;</td><th scope="col">0</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col"></th>
        </tr><tr valign=top><td align=right><a name=q17>17.</a></td>
            <td><label for=q17>Learning to operate the system</label>
            </td>
            <td align=right><font size="-1">difficult</font></td>
            <td><input type='radio' id='q17_0' name='q17[]' title='0 (difficult)' value='0' ></td>
            <td><input type='radio' id='q17_1' name='q17[]' title='1' value='1' ></td>
            <td><input type='radio' id='q17_2' name='q17[]' title='2' value='2' ></td>
            <td><input type='radio' id='q17_3' name='q17[]' title='3' value='3' ></td>
            <td><input type='radio' id='q17_4' name='q17[]' title='4' value='4' ></td>
            <td><input type='radio' id='q17_5' name='q17[]' title='5' value='5' ></td>
            <td><input type='radio' id='q17_6' name='q17[]' title='6' value='6' ></td>
            <td><input type='radio' id='q17_7' name='q17[]' title='7' value='7' ></td>
            <td><input type='radio' id='q17_8' name='q17[]' title='8' value='8' ></td>
            <td><input type='radio' id='q17_9' name='q17[]' title='9 (easy)' value='9' ></td>
            <td align=left><font size="-1">easy</font></td>
        </tr><tr valign=top><td align=right><a name=q18>18.</a></td>
            <td><label for=q18>Exploring new features by trial and error</label>
            </td>
            <td align=right><font size="-1">difficult</font></td>
            <td><input type='radio' id='q18_0' name='q18[]' title='0 (difficult)' value='0' ></td>
            <td><input type='radio' id='q18_1' name='q18[]' title='1' value='1' ></td>
            <td><input type='radio' id='q18_2' name='q18[]' title='2' value='2' ></td>
            <td><input type='radio' id='q18_3' name='q18[]' title='3' value='3' ></td>
            <td><input type='radio' id='q18_4' name='q18[]' title='4' value='4' ></td>
            <td><input type='radio' id='q18_5' name='q18[]' title='5' value='5' ></td>
            <td><input type='radio' id='q18_6' name='q18[]' title='6' value='6' ></td>
            <td><input type='radio' id='q18_7' name='q18[]' title='7' value='7' ></td>
            <td><input type='radio' id='q18_8' name='q18[]' title='8' value='8' ></td>
            <td><input type='radio' id='q18_9' name='q18[]' title='9 (easy)' value='9' ></td>
            <td align=left><font size="-1">easy</font></td>
        </tr><tr valign=top><td align=right><a name=q19>19.</a></td>
            <td><label for=q19>Remembering names and use of commands</label>
            </td>
            <td align=right><font size="-1">difficult</font></td>
            <td><input type='radio' id='q19_0' name='q19[]' title='0 (difficult)' value='0' ></td>
            <td><input type='radio' id='q19_1' name='q19[]' title='1' value='1' ></td>
            <td><input type='radio' id='q19_2' name='q19[]' title='2' value='2' ></td>
            <td><input type='radio' id='q19_3' name='q19[]' title='3' value='3' ></td>
            <td><input type='radio' id='q19_4' name='q19[]' title='4' value='4' ></td>
            <td><input type='radio' id='q19_5' name='q19[]' title='5' value='5' ></td>
            <td><input type='radio' id='q19_6' name='q19[]' title='6' value='6' ></td>
            <td><input type='radio' id='q19_7' name='q19[]' title='7' value='7' ></td>
            <td><input type='radio' id='q19_8' name='q19[]' title='8' value='8' ></td>
            <td><input type='radio' id='q19_9' name='q19[]' title='9 (easy)' value='9' ></td>
            <td align=left><font size="-1">easy</font></td>
        </tr><tr valign=top><td align=right><a name=q20>20.</a></td>
            <td><label for=q20>Performing tasks is straightforward</label>
            </td>
            <td align=right><font size="-1">never</font></td>
            <td><input type='radio' id='q20_0' name='q20[]' title='0 (never)' value='0' ></td>
            <td><input type='radio' id='q20_1' name='q20[]' title='1' value='1' ></td>
            <td><input type='radio' id='q20_2' name='q20[]' title='2' value='2' ></td>
            <td><input type='radio' id='q20_3' name='q20[]' title='3' value='3' ></td>
            <td><input type='radio' id='q20_4' name='q20[]' title='4' value='4' ></td>
            <td><input type='radio' id='q20_5' name='q20[]' title='5' value='5' ></td>
            <td><input type='radio' id='q20_6' name='q20[]' title='6' value='6' ></td>
            <td><input type='radio' id='q20_7' name='q20[]' title='7' value='7' ></td>
            <td><input type='radio' id='q20_8' name='q20[]' title='8' value='8' ></td>
            <td><input type='radio' id='q20_9' name='q20[]' title='9 (always)' value='9' ></td>
            <td align=left><font size="-1">always</font></td>
        </tr><tr valign=top><td align=right><a name=q21>21.</a></td>
            <td><label for=q21>Help messages on the screen</label>
            </td>
            <td align=right><font size="-1">unhelpful</font></td>
            <td><input type='radio' id='q21_0' name='q21[]' title='0 (unhelpful)' value='0' ></td>
            <td><input type='radio' id='q21_1' name='q21[]' title='1' value='1' ></td>
            <td><input type='radio' id='q21_2' name='q21[]' title='2' value='2' ></td>
            <td><input type='radio' id='q21_3' name='q21[]' title='3' value='3' ></td>
            <td><input type='radio' id='q21_4' name='q21[]' title='4' value='4' ></td>
            <td><input type='radio' id='q21_5' name='q21[]' title='5' value='5' ></td>
            <td><input type='radio' id='q21_6' name='q21[]' title='6' value='6' ></td>
            <td><input type='radio' id='q21_7' name='q21[]' title='7' value='7' ></td>
            <td><input type='radio' id='q21_8' name='q21[]' title='8' value='8' ></td>
            <td><input type='radio' id='q21_9' name='q21[]' title='9 (helpful)' value='9' ></td>
            <td align=left><font size="-1">helpful</font></td>
        </tr><tr valign=top><td align=right><a name=q22>22.</a></td>
            <td><label for=q22>Supplemental reference materials</label>
            </td>
            <td align=right><font size="-1">confusing</font></td>
            <td><input type='radio' id='q22_0' name='q22[]' title='0 (confusing)' value='0' ></td>
            <td><input type='radio' id='q22_1' name='q22[]' title='1' value='1' ></td>
            <td><input type='radio' id='q22_2' name='q22[]' title='2' value='2' ></td>
            <td><input type='radio' id='q22_3' name='q22[]' title='3' value='3' ></td>
            <td><input type='radio' id='q22_4' name='q22[]' title='4' value='4' ></td>
            <td><input type='radio' id='q22_5' name='q22[]' title='5' value='5' ></td>
            <td><input type='radio' id='q22_6' name='q22[]' title='6' value='6' ></td>
            <td><input type='radio' id='q22_7' name='q22[]' title='7' value='7' ></td>
            <td><input type='radio' id='q22_8' name='q22[]' title='8' value='8' ></td>
            <td><input type='radio' id='q22_9' name='q22[]' title='9 (clear)' value='9' ></td>
            <td align=left><font size="-1">clear</font></td>
        </tr><tr bgcolor="#dddddd" valign=middle> <td colspan=2><b>SYSTEM CAPABILITIES</b></td>
            <td>&nbsp;</td><th scope="col">0</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col"></th>
        </tr><tr valign=top><td align=right><a name=q23>23.</a></td>
            <td><label for=q23>System speed</label>
            </td>
            <td align=right><font size="-1">too slow</font></td>
            <td><input type='radio' id='q23_0' name='q23[]' title='0 (too slow)' value='0' ></td>
            <td><input type='radio' id='q23_1' name='q23[]' title='1' value='1' ></td>
            <td><input type='radio' id='q23_2' name='q23[]' title='2' value='2' ></td>
            <td><input type='radio' id='q23_3' name='q23[]' title='3' value='3' ></td>
            <td><input type='radio' id='q23_4' name='q23[]' title='4' value='4' ></td>
            <td><input type='radio' id='q23_5' name='q23[]' title='5' value='5' ></td>
            <td><input type='radio' id='q23_6' name='q23[]' title='6' value='6' ></td>
            <td><input type='radio' id='q23_7' name='q23[]' title='7' value='7' ></td>
            <td><input type='radio' id='q23_8' name='q23[]' title='8' value='8' ></td>
            <td><input type='radio' id='q23_9' name='q23[]' title='9 (fast enough)' value='9' ></td>
            <td align=left><font size="-1">fast enough</font></td>
        </tr><tr valign=top><td align=right><a name=q24>24.</a></td>
            <td><label for=q24>System reliability</label>
            </td>
            <td align=right><font size="-1">unreliable</font></td>
            <td><input type='radio' id='q24_0' name='q24[]' title='0 (unreliable)' value='0' ></td>
            <td><input type='radio' id='q24_1' name='q24[]' title='1' value='1' ></td>
            <td><input type='radio' id='q24_2' name='q24[]' title='2' value='2' ></td>
            <td><input type='radio' id='q24_3' name='q24[]' title='3' value='3' ></td>
            <td><input type='radio' id='q24_4' name='q24[]' title='4' value='4' ></td>
            <td><input type='radio' id='q24_5' name='q24[]' title='5' value='5' ></td>
            <td><input type='radio' id='q24_6' name='q24[]' title='6' value='6' ></td>
            <td><input type='radio' id='q24_7' name='q24[]' title='7' value='7' ></td>
            <td><input type='radio' id='q24_8' name='q24[]' title='8' value='8' ></td>
            <td><input type='radio' id='q24_9' name='q24[]' title='9 (reliable)' value='9' ></td>
            <td align=left><font size="-1">reliable</font></td>
        </tr><tr valign=top><td align=right><a name=q25>25.</a></td>
            <td><label for=q25>System tends to be</label>
            </td>
            <td align=right><font size="-1">noisy</font></td>
            <td><input type='radio' id='q25_0' name='q25[]' title='0 (noisy)' value='0' ></td>
            <td><input type='radio' id='q25_1' name='q25[]' title='1' value='1' ></td>
            <td><input type='radio' id='q25_2' name='q25[]' title='2' value='2' ></td>
            <td><input type='radio' id='q25_3' name='q25[]' title='3' value='3' ></td>
            <td><input type='radio' id='q25_4' name='q25[]' title='4' value='4' ></td>
            <td><input type='radio' id='q25_5' name='q25[]' title='5' value='5' ></td>
            <td><input type='radio' id='q25_6' name='q25[]' title='6' value='6' ></td>
            <td><input type='radio' id='q25_7' name='q25[]' title='7' value='7' ></td>
            <td><input type='radio' id='q25_8' name='q25[]' title='8' value='8' ></td>
            <td><input type='radio' id='q25_9' name='q25[]' title='9 (quiet)' value='9' ></td>
            <td align=left><font size="-1">quiet</font></td>
        </tr><tr valign=top><td align=right><a name=q26>26.</a></td>
            <td><label for=q26>Correcting your mistakes</label>
            </td>
            <td align=right><font size="-1">difficult</font></td>
            <td><input type='radio' id='q26_0' name='q26[]' title='0 (difficult)' value='0' ></td>
            <td><input type='radio' id='q26_1' name='q26[]' title='1' value='1' ></td>
            <td><input type='radio' id='q26_2' name='q26[]' title='2' value='2' ></td>
            <td><input type='radio' id='q26_3' name='q26[]' title='3' value='3' ></td>
            <td><input type='radio' id='q26_4' name='q26[]' title='4' value='4' ></td>
            <td><input type='radio' id='q26_5' name='q26[]' title='5' value='5' ></td>
            <td><input type='radio' id='q26_6' name='q26[]' title='6' value='6' ></td>
            <td><input type='radio' id='q26_7' name='q26[]' title='7' value='7' ></td>
            <td><input type='radio' id='q26_8' name='q26[]' title='8' value='8' ></td>
            <td><input type='radio' id='q26_9' name='q26[]' title='9 (easy)' value='9' ></td>
            <td align=left><font size="-1">easy</font></td>
        </tr><tr valign=top><td align=right><a name=q27>27.</a></td>
            <td><label for=q27>Designed for all levels of users</label>
            </td>
            <td align=right><font size="-1">never</font></td>
            <td><input type='radio' id='q27_0' name='q27[]' title='0 (never)' value='0' ></td>
            <td><input type='radio' id='q27_1' name='q27[]' title='1' value='1' ></td>
            <td><input type='radio' id='q27_2' name='q27[]' title='2' value='2' ></td>
            <td><input type='radio' id='q27_3' name='q27[]' title='3' value='3' ></td>
            <td><input type='radio' id='q27_4' name='q27[]' title='4' value='4' ></td>
            <td><input type='radio' id='q27_5' name='q27[]' title='5' value='5' ></td>
            <td><input type='radio' id='q27_6' name='q27[]' title='6' value='6' ></td>
            <td><input type='radio' id='q27_7' name='q27[]' title='7' value='7' ></td>
            <td><input type='radio' id='q27_8' name='q27[]' title='8' value='8' ></td>
            <td><input type='radio' id='q27_9' name='q27[]' title='9 (always)' value='9' ></td>
            <td align=left><font size="-1">always</font></td>
        </tr><tr bgcolor="#dddddd" valign=middle><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><th scope="col">0</th>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">3</th>
            <th scope="col">4</th>
            <th scope="col">5</th>
            <th scope="col">6</th>
            <th scope="col">7</th>
            <th scope="col">8</th>
            <th scope="col">9</th>
            <th scope="col"></th>
        </tr>

            <tr>
                <td></td>
                <td>what do you like or dislike in this software?
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <textarea name='like_or_dislike'></textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>Would you like to suggest an improvement?

                </td>

            </tr>
            <tr>
                <td></td>
                <td><textarea name='suggestion'></textarea>
                </td>

            </tr>




    </table>

    <br>

    <input type=submit name=submit title="Mail Data" value="Submit">

    <a href=#top>Top of Form</a> |


</form>
        </div>
    </div>
</div>
</body>
</html>
<!-----------------------footer--------------------------->
@include('footer')
<!------------------------------------------------------------>
