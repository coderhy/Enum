# Enum

### 开发者

-   何渊([@coderhy](https://github.com/coderhy))

### 接入组件
composer require coderhy/enum

### 使用方法：

- 1、use CodeMessage\UserCode;//use引入 或使用时补全命名空间 CodeMessage\UserCode::ERROR_PASSWORD
- 2、使用code码 CodeMessage\UserCode::ERROR_PASSWORD
- 3、获取错误信息 UserCode::valueOf(UserCode::ERROR_PASSWORD)