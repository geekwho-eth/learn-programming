## 学习编程的美
学习常用算法，数据结构。

### 环境搭建
搭建PHP基础开发环境，请参考[GitHub地址](git@github.com:geekwho11/docker.xbc.me.git)

### 常用算法
1. [冒泡排序](./app/business/Algorithm/Sort/BubbleSort.php)
2. [快速排序](./app/business/Algorithm/Sort/QuickSort.php)
3. [选择排序](./app/business/Algorithm/Sort/SelectSort.php)
4. [归并排序](./app/business/Algorithm/Sort/MergeSort.php)
5. [堆排序](./app/business/Algorithm/Sort/HeapSort.php)

#### 算法实现
```
#冒泡排序
bash bin/cli.sh sort bs

#快速排序
bash bin/cli.sh sort qs

#选择排序
bash bin/cli.sh sort ss

#归并排序
bash bin/cli.sh sort ms

#堆排序
bash bin/cli.sh sort hs
```

### 常见数据结构
1. [双向链表](./app/business/DataStructrue/LinkedList/DoublyLinkedList.php)
```
# 双向链表
bash bin/test.sh Base testDoublyLinkedList
```

### 单元测试
```
# run all test case
bash bin/test.sh
```

### 参考链接
1. [神秘极客](https://xbc.me/)
2. [PHP-Data-Structure-and-Algorithms](https://github.com/mirahman/PHP-Data-Structure-and-Algorithms)
