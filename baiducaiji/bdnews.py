#!/usr/bin/python
# -*- coding: UTF-8 -*-
print
import urllib
import urllib2
import re
import MySQLdb
print

class News:

    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"
    #convert div to ''
    def tranTags(self, x):
        pattern = re.compile('<div.*?</div>')
        res = re.sub(pattern, '', x)
        return res

    #getPage
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #get navCode
    def getNavCode(self):
        page = self.getPage()
        pattern = re.compile('(<div id="menu".*?)<i class="slogan"></i>', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)
        
    #get nav
    def getNav(self):
        navCode = self.getNavCode()
        pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        return itmes

    def getContent(self):
        getContent = self.getPage()
        pattern = re.compile('(<div id="pane-news" class="mod-tab-pane active">.*?)</div><a name="imagenews" class="focustop-anchor"></a>', re.S)
        con = re.search(pattern, getContent)
        bodycode = re.sub(r'<a .*?><img .*?</a>', '', con.group(1))
        bodycode = re.sub(r'<a .*?>\n<img .*?\n</a>', '', bodycode)
        return bodycode

    def getul(self):
        getul = self.getContent()
        pattern = re.compile('<a href="(http://.*?").*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, getul)
        return itmes
        # for item in itmes:
        #     # print item[0][:-1],itme[1]
        #     return item[0], self.tranTags(item[1])


db = MySQLdb.connect("localhost","root","root","yue",charset="GBK")
cursor = db.cursor()
newi = News()
new = newi.getul()

for i in new:
    print i[0],newi.tranTags(i[1])
    title = newi.tranTags(i[1])
    sql = """INSERT INTO tab2(title,url)VALUES(%s, %s )""" % ("'"+title+"'","'"+i[0]+"'")
    #vala = (vall,val[0])
    try:
        cursor.execute(sql)
        db.commit()
    except:
        db.rollback()
