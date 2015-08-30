<?php
include 'Common/initial_header.php';
include 'Common/footer.php';
?>
<body>
    <div class="container-fluid">
        <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12" style="position: absolute; top: 25%;">
            <div class="panel panel-success">
                <div class="panel-heading">Registration Form</div>
                <div class="panel-body">
                    <form id="frmRegister" action="../dashboard/index" method="post" enctype="multipart/form-data">                        
                        <table id="register_form" border="0">
                            <tr>
                                <td align="right">Register as: &emsp;</td>
                                <td>
                                    <input type="checkbox" name="Role" value="Author">&nbsp; Author &emsp;
                                    <input type="checkbox" name="Role" value="Reviewer">&nbsp; Reviewer
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Title &emsp;</td>                               
                                <td>
                                    <select name="title" id="title" validate="true" error="Please select a title">
                                        <option value="0">Please select</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Prof">Prof</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                    </select>
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">First name &emsp;</td>
                                <td>
                                    <input type="text" name="first_name" id="first_name" size="20" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name"/> *
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Last name &emsp;</td>
                                <td>
                                    <input type="text" name="last_name" id="last_name" validate="true" match="^[A-z]+$" error="Please Enter Last Name"/> *
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Gender &emsp;</td>
                                <td>
                                    <input type="radio" name="gender" id="male" value="Male"/>&nbsp;Male &nbsp;
                                    <input type="radio" name="gender" id="female" value="Female" validate="true" error="Please select a gender"/>&nbsp;Female
                                    <div class="error"></div>
                                </td>
                            </tr>           
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Address &emsp;</td>
                                <td>
                                    <textarea id="address" name="address" cols="20" rows="4" validate="true" match="^[a-zA-Z0-9.,/ \n-]+$" error="Please enter a valid address"></textarea>
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Country &emsp;
                                </td>
                                <td>
                                    <select id="country"> 
                                        <option value="Sri Lanka"> Sri Lanka </option>
                                        <option value="India"> India </option>
                                        <option value="Japan"> Japan </option>
                                        <option value="Korea"> Korea </option>
                                        <option value="other"> Other </option>
                                    </select>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Email &emsp;</td>
                                <td>
                                    <input type="text" name="email" id="email" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address"/> *
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Mobile &emsp;</td>
                                <td>
                                    <input type="text" name="mobile" id="mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number"/> *
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Telephone(work) &emsp;</td>
                                <td>
                                    <input type="text" name="tp" id="tp" validate="true" match="^[0-9]+$" error="Please Enter a valid phone number"/>
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Employer & job title &emsp;</td>
                                <td>
                                    <input type="text" id="job" name="job"/>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Specialized area(s) &emsp;</td>
                                <td>
                                    <input type="text" name="area" id="area" validate="true" error="Please Enter specialized areas"/>*
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="text" name="area" id="area"/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="text" name="area" id="area"/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="text" name="area" id="area"/>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Academic qualifications &emsp;</td>
                                <td>
                                    <textarea id="academic" name="academic" placeholder="Please enter briefly" cols="20" rows="4" ></textarea>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Other journals reviewing for &emsp;</td>
                                <td>
                                    <textarea id="journals" name="journals" cols="20" rows="4" ></textarea>
                                </td>
                            </tr>            
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Experience of reviewing (years) &emsp;</td>
                                <td>
                                    <input type="text" name="experience" id="experience" validate="true" match="^[0-9]+$" error="Please Enter a valid year"/>
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Password &emsp;</td>
                                <td>
                                    <input type="password" name="pw" id="pw" validate="true" match="^[0-9]+$" error="Please Enter a strong password"/> *
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Confirm password &emsp;</td>
                                <td>
                                    <input type="password" name="cpw" id="cpw" validate="true" match="^[0-9]+$" error="Please Enter a strong password"/> *
                                    <div class="error"></div>
                                </td>
                            </tr>
                            <tr> <td>&nbsp;</td></tr>
                        </table>
                        <input type="radio" name="agreement" id="agree" value="agree" validate="true" error="Please agree T&c to continue"/>&nbsp;I have read and agree to abide by the <a href=""> TARE terms & conditions and privacy policy.* </a> <br>
                        <input type="radio" name="agreement" id="diagree" value="diagree" checked="true"/>&nbsp;I do not agree
                        <div class="error"></div>
                        <div align="center">
                            <button id="btnSubmit" class="btn btn-success"> Submit </button>&emsp;
<!--                            <input type="submit" id="submit" value="Submit"/>--> 
                            <button id="btnCancel" class="btn btn-success"> Cancel </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
