            <!--放入view具体内容-->

            <div class="block box">

                <div class="usBox">
                    <div class="usBox_2 clearfix">
                        <div class="logtitle3"></div>
                        <form id="yw0" action="/index.php?r=user/register" method="post">                <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;"><label for="User_username" class="required">用户名 
                                        <span class="required">*</span></label>
                                        </td>

                                        <td style="width:87%;">
                                            <input class="inputBg" size="25" name="User[username]" id="User_username" type="text" value="" />                  
                                            <span style="color:red;">用户名已经存在</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            <label for="User_password" class="required">密码 <span class="required">*</span></label>
                                        </td>

                                        <td>
                                            <input class="inputBg" size="25" name="User[password]" id="User_password" type="password" value="" />         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_password2">密码确认</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="User[password2]" id="User_password2" type="password" />
                                        </td>

                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_email">邮箱</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="User[user_email]" id="User_user_email" type="text" value="" />    
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right"><label for="User_user_qq">qq号码</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="User[user_qq]" id="User_user_qq" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right"><label for="User_user_tel">手机</label></td>
                                        <td>
                                            <input class="inputBg" size="25" name="User[user_tel]" id="User_user_tel" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_sex">性别</label></td>
                                        <td>
                                            <input id="ytUser_user_sex" type="hidden" value="" name="User[user_sex]" />
                                            <span id="User_user_sex">
                                            <input id="User_user_sex_0" value="1" checked="checked" type="radio" name="User[user_sex]" /> 
                                            <label for="User_user_sex_0">男</label>&nbsp;
                                            <input id="User_user_sex_1" value="2" type="radio" name="User[user_sex]" /> 
                                            <label for="User_user_sex_1">女</label>&nbsp;
                                            <input id="User_user_sex_2" value="3" type="radio" name="User[user_sex]" /> 
                                            <label for="User_user_sex_2">保密</label></span>                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--dropDownList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_xueli">学历</label></td>
                                        <td>
                                            <select name="User[user_xueli]" id="User_user_xueli">
                                                <option value="1" selected="selected">-请选择-</option>
                                                <option value="2">小学</option>

                                                <option value="3">初中</option>
                                                <option value="4">高中</option>
                                                <option value="5">大学</option>
                                            </select>                                <div class="errorMessage" id="User_user_xueli_em_" style="display:none"></div>                            </td>
                                    </tr>
                                    <tr>
                                        <!--checkBoxList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_hobby">爱好</label></td>

                                        <td>
                                            <input id="ytUser_user_hobby" type="hidden" value="" name="User[user_hobby]" />
                                            <span id="User_user_hobby">
                                            <input id="User_user_hobby_0" value="1" type="checkbox" name="User[user_hobby][]" /> 
                                            <label for="User_user_hobby_0">篮球</label>&nbsp;
                                            <input id="User_user_hobby_1" value="2" type="checkbox" name="User[user_hobby][]" /> 
                                            <label for="User_user_hobby_1">足球</label>&nbsp;
                                            <input id="User_user_hobby_2" value="3" type="checkbox" name="User[user_hobby][]" /> 
                                            <label for="User_user_hobby_2">排球</label>&nbsp;
                                            <input id="User_user_hobby_3" value="4" type="checkbox" name="User[user_hobby][]" /> 
                                            <label for="User_user_hobby_3">棒球</label>
                                            </span>                                
                                        </td>
                                    </tr>
                                    <tr>

                                        <!--textArea($model,$attribute,$htmlOptions=array())-->
                                        <td align="right"><label for="User_user_introduce">简介</label></td>
                                        <td>
                                            <textarea cols="50" rows="5" name="User[user_introduce]" id="User_user_introduce"></textarea>                      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                        </form>        </div>
                </div>
            </div>
            <!--放入view具体内容-->
        </div>