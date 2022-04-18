import datetime
from django.db import models
from django.utils import timezone


class Document(models.Model):
    title = models.CharField(max_length=100)
    category = models.CharField(max_length=30)
    author = models.CharField(max_length=15)
    pub_date = models.DateTimeField('date published')
    text = models.TextField(max_length=20000)
    
    def __str__(self):
        return self.title
