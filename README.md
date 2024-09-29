# FJ登录注册-测试界面

这是一个用于我们组在“软件测试”课的自动化测试实验使用的示例网页。默认进入 `index.html` 注册界面，还有 `login.html` 登录界面，两个页面最终跳转到的都是 `myhome.html` 用于展示我们小组成员以及学号和QQ头像的一个页面。整个项目是在原来我`web网页开发`课程实现的作业页面的基础上进行的修改的，引入了弹性布局等新特性，界面更加好看了。

## 功能描述

- **背景图片自适应**：背景图片会根据窗口大小自动调整大小和位置，以适应不同屏幕尺寸。
- **Logo自适应**：Logo会根据窗口大小自动调整大小，以保持比例。
- **输入框默认值**：输入框在获得焦点时会清除默认值，失去焦点时如果为空则恢复默认值。
- **表单验证**：在提交表单前会进行验证，确保所有字段都已填写，验证码正确，并且用户已同意协议。

## 文件结构

```
- index.html
- index.css
- background.jpg
- logo.png
- login.html
- myhome.html
```

## 使用说明

### 注册页面使用说明

1. 将所有文件放置在同一目录下。
2. 打开 `index.html` 文件，即可看到注册页面。
3. 根据提示填写用户名、手机号、密码和验证码。
4. 点击“注册”按钮，如果所有字段填写正确并且验证码正确，将会跳转到 `myhome.html` 页面。

### 登录页面使用说明

1. 将所有文件放置在同一目录下。
2. 打开 `login.html` 文件，即可看到登录页面。
3. 根据提示填写手机号和密码。
4. 勾选协议复选框
5. 点击“登录”按钮，如果所有字段填写正确并且复选框已经勾选，将会跳转到 `myhome.html` 页面。

## 注意事项

- 这只是一个自用项目，当然它非常适合新手，因为它足够简单。
- 请确保所有字段填写正确并且同意协议，否则无法提交表单。

## 脚本说明

### 注册页面脚本说明

#### 1. 创建一个新的测试

```vbscript
' 创建一个新的测试
Set qtApp = New QTP.Application
qtApp.Launch
```

#### 2. 打开注册页面

```vbscript
' 打开注册页面
Set qtWindow = qtApp.Open("C:\path\to\your\index.html", 3)
```

#### 3. 设置等待时间

```vbscript
' 设置等待时间
qtApp.SetThinkTime 2
```

#### 4. 输入用户名

```vbscript
' 输入用户名
Set qtEdit = qtWindow.FindChild("name=username", "Edit")
qtEdit.SetProperty "Value", "testuser"
```

#### 5. 输入手机号

```vbscript
' 输入手机号
Set qtEdit = qtWindow.FindChild("name=phoneNumber", "Edit")
qtEdit.SetProperty "Value", "12345678901"
```

#### 6. 输入密码

```vbscript
' 输入密码
Set qtEdit = qtWindow.FindChild("name=password", "Edit")
qtEdit.SetProperty "Value", "password123"
```

#### 7. 输入验证码

```vbscript
' 输入验证码
Set qtEdit = qtWindow.FindChild("name=testWord", "Edit")
qtEdit.SetProperty "Value", "114514"
```

#### 8. 勾选协议复选框

```vbscript
' 勾选协议复选框
Set qtCheckbox = qtWindow.FindChild("id=agreementCheckbox", "Checkbox")
qtCheckbox.Set "True"
```

#### 9. 点击注册按钮

```vbscript
' 点击注册按钮
Set qtButton = qtWindow.FindChild("type=submit", "Button")
qtButton.Click
```

#### 10. 等待页面跳转

```vbscript
' 等待页面跳转
qtApp.SetThinkTime 5
```

#### 11. 检查是否跳转到myhome.html页面

```vbscript
' 检查是否跳转到myhome.html页面
Set qtWindow = qtApp.Window("myhome.html", 3)
If Not qtWindow Is Nothing Then
    MsgBox "注册成功！"
Else
    MsgBox "注册失败！"
End If
```

#### 12. 关闭测试

```vbscript
' 关闭测试
qtApp.Quit
```

### 登录页面脚本说明

#### 1. 创建一个新的测试

```vbscript
' 创建一个新的测试
Set qtApp = New QTP.Application
qtApp.Launch
```

#### 2. 打开登录页面

```vbscript
' 打开登录页面
Set qtWindow = qtApp.Open("C:\path\to\your\login.html", 3)
```

#### 3. 设置等待时间

```vbscript
' 设置等待时间
qtApp.SetThinkTime 2
```

#### 4. 输入手机号

```vbscript
' 输入手机号
Set qtEdit = qtWindow.FindChild("name=phoneNumber", "Edit")
qtEdit.SetProperty "Value", "12345678901"
```

#### 5. 输入密码

```vbscript
' 输入密码
Set qtEdit = qtWindow.FindChild("name=password", "Edit")
qtEdit.SetProperty "Value", "password123"
```

#### 6. 勾选协议复选框

```vbscript
' 勾选协议复选框
Set qtCheckbox = qtWindow.FindChild("id=agreementCheckbox", "Checkbox")
qtCheckbox.Set "True"
```

#### 7. 点击登录按钮

```vbscript
' 点击登录按钮
Set qtButton = qtWindow.FindChild("type=submit", "Button")
qtButton.Click
```

#### 8. 等待页面跳转

```vbscript
' 等待页面跳转
qtApp.SetThinkTime 5
```

#### 9. 检查是否跳转到myhome.html页面

```vbscript
' 检查是否跳转到myhome.html页面
Set qtWindow = qtApp.Window("myhome.html", 3)
If Not qtWindow Is Nothing Then
    MsgBox "登录成功！"
Else
    MsgBox "登录失败！"
End If
```

#### 10. 关闭测试

```vbscript
' 关闭测试
qtApp.Quit
```

## 免责声明

- 本项目仅供学习和交流使用，请勿用于其他用途。
- 本项目中的验证码为示例，实际使用时请替换为真实的验证码系统。

## 联系方式

如有任何问题或建议，请通过以下方式联系我们：

- 邮箱：2967557176@example.com
- QQ：2967557176

## 版权声明

本项目的所有代码和资源均由作者所有，未经作者许可，不得用于其他用途。