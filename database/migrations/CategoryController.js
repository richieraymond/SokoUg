'use strict'

const Category  = use('App/Models/Category')
const { sanitizor } = use('Validator')
const moment = require('moment')
const users = make('App/Services/UserService')
const Antl = use('Antl')

class CategoryController {

  async index ({ view, session }) {
    const categories = await users.getCategories()
    const sponsoredAds = await users.getSponsoredAds()
    return view.render('category.index', { antl : Antl, categories : categories, sponsoredAds : sponsoredAds })
  }

  async show ({ params, view, session }) {
    const categoryUrl = sanitizor.slug(params.id)
    const categories = await users.getCategories()
    const sponsoredAds = await users.getSponsoredAds()
    let category = ''
    try {
      category = await Category
      .query()
      .with('subcategory')
      .with('products')
      .where( 'url', categoryUrl)
      .first()
      category = category.toJSON()
    } catch (e) {
      session.flash({ server_error : 'Oops... something went wrong'})
    } finally {
      return view.render('category.show', { antl : Antl, category : category, categories : categories, moment : moment, sponsoredAds : sponsoredAds })
    }
  }
}

module.exports = CategoryController
