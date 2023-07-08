
# 静默执行格式 php /path/to/your/script.php > /dev/null 2>&1 & 
## ps aux | grep php
## kill <PID>

#!/bin/bash

pid=$(pgrep -f queue.php)

if [ -n "$pid" ]; then
  # 如果找到 PID，则使用 kill 命令终止该进程
  kill "$pid"
  echo "PHP进程已终止"
else
  echo "未找到匹配的PHP进程"
fi

php /var/apps/fourbrother/master_app/modules/mini_rebate/apps/queue.php > /dev/null 2>&1 &

# 列出当前用户的Crontab定时任务
crontab -l

# 添加需要执行的Crontab命令
# 这里假设你要在每天早上6点运行一个脚本
echo "* * * * * curl http://fourbrother.cn:9988/modules/mini_rebate/apps/notic.php" | crontab -

# 重启Crontab服务
systemctl restart crond