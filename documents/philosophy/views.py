from django.http import Http404
from django.shortcuts import render
from django.http import HttpResponse


from .models import Document

def index(request):
    d = Document.objects.all()
    return render(request, 'philosophy/index.html' , {'doc_list': d})

