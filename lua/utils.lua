function getParentPath(path)
    -- 统一路径分隔符为当前系统格式
    local separator = path:sub(1, 1)  -- 获取系统路径分隔符
    -- 替换所有路径分隔符为当前系统的
    path = path:gsub("[/\\]", separator)
    -- 移除末尾的分隔符（如果有）
    path = path:gsub(separator .. "$", "")
    -- 查找最后一个分隔符的位置
    local last_sep = path:match(".*" .. separator .. "()")
    if last_sep then
        return path:sub(1, last_sep - 2)  -- 返回父目录路径
    end
    return ""  -- 如果没有父目录（已经是根目录）
end
function dump_table(t, indent, visited)
    -- 参数初始化
    indent = indent or 0
    visited = visited or {}
    
    -- 检查是否已访问过（防止循环引用）
    local id = tostring(t)
    if visited[id] then
        return string.rep("  ", indent) .. "... (已遍历)\n"
    end
    visited[id] = true
    
    -- 检查类型
    local t_type = type(t)
    if t_type ~= "table" then
        return tostring(t)
    end
    
    -- 构建输出字符串
    local result = "{\n"
    local indent_str = string.rep("  ", indent + 1)
    
    -- 遍历table
    for key, value in pairs(t) do
        -- 处理键的显示
        local key_str
        if type(key) == "string" and string.match(key, "^[a-zA-Z_][a-zA-Z0-9_]*$") then
            key_str = key
        else
            key_str = "[" .. tostring(key) .. "]"
        end
        
        -- 处理值的显示
        local value_str
        if type(value) == "table" then
            value_str = dump_table(value, indent + 1, visited)
        else
            value_str = tostring(value)
            if type(value) == "string" then
                value_str = '"' .. value_str .. '"'
            end
        end
        
        result = result .. indent_str .. key_str .. " = " .. value_str .. ",\n"
    end
    
    -- 添加闭合括号
    result = result .. string.rep("  ", indent) .. "}"
    
    return result
end
function print_table_simple(t)
    if type(t) ~= "table" then
        print("不是table: " .. tostring(t))
        return
    end
    
    for key, value in pairs(t) do
        print(key, value)
    end
end