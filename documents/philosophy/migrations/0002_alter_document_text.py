# Generated by Django 4.0.3 on 2022-04-03 22:28

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('philosophy', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='document',
            name='text',
            field=models.TextField(max_length=20000),
        ),
    ]
