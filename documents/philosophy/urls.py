from django.urls import path

from . import views

app_name = 'philosophy'
urlpatterns = [
    path('', views.index, name='index'),
]
